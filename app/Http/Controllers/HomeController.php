<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();
        $categories_selected = $request->input('categories', []);
        $products = Product::when($categories_selected, function($query) use ($categories_selected) {
            return $query->whereHas('category', function($query) use ($categories_selected) {
                $query->whereIn('Category_ID', $categories_selected);
            });
        })->get();

        $orders = Order::where('user_id', Auth::id())->with('product', 'color')->get();

        return view('user.home', compact('products', 'categories', 'orders'));
    }

    public function purchaseHistory()
    {
        $orders = Order::where('user_id', Auth::id())->with('product', 'color')->get();

        return view('user.purchase-history', compact('orders'));
    }

    public function profile()
{
    return view('user.user-profile');
}

public function update(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'username' => 'required|string|max:255',
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:15',
            'gender' => 'required|in:Male,Female,Other',
        ]);

        // Update the user's profile information
        $user = auth()->user(); // Assumes authentication is being used
        $user->update($request->only(['username', 'firstname', 'lastname', 'email', 'phone', 'gender']));

        return redirect()->route('user.profile')->with('success', 'Profile updated successfully.');
    }

}

