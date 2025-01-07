<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\Color;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index(){
        $order = Order::all();

        return view('admin.order',compact('order'));
    }
    public function create(Request $request, Product $product)
    {
        // Get the selected color ID and quantity from the request
        $colorId = $request->get('color');
        $quantity = $request->get('quantity');
        
        // Find the selected color
        $color = Color::where('color_id', $colorId)->where('product_id', $product->product_id)->firstOrFail();

        // Check if there is enough stock
        if ($product->piece < $quantity || $color->quantity < $quantity) {
            return back()->withErrors(['message' => 'Not enough stock available']);
        }

        // Create a new order
        $order = new Order();
        $order->user_id = Auth::id(); // Associate the order with the current user
        $order->product_id = $product->product_id;
        $order->color_id = $color->color_id;
        $order->quantity = $quantity;
        $order->save();

        // Reduce the product piece and color quantity based on the order
        $product->piece -= $quantity;
        $product->save();

        $color->quantity -= $quantity;
        $color->save();

        return redirect()->route('order.purchased'); // Redirect to the purchased page
    }

    public function purchased()
    {
        return view('user.purchased'); // Ensure it points to 'user/purchased'
    }
}
