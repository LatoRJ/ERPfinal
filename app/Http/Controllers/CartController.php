<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function addToCart(Request $request, $id)
{
    $product = Product::findOrFail($id);
    $colorId = $request->query('color');
    $color = $product->colors()->findOrFail($colorId);

    $cart = session()->get('cart', []);

    $cartKey = $id . '_' . $colorId;

    if(isset($cart[$cartKey])) {
        $cart[$cartKey]['quantity']++;
    } else {
        $cart[$cartKey] = [
            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->price,
            "image" => $product->image,
            "color" => $color->color
        ];
    }

    session()->put('cart', $cart);

    return redirect()->back()->with('success', 'Product added to cart successfully!');
}


    public function viewCart()
    {
        $cart = session()->get('cart');
        return view('user.cart', compact('cart'));
    }
}

