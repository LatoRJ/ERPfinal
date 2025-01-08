<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Color;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the products.
     */
    public function index()
    {
        $products = Product::with(['category', 'colors'])->paginate(5);// Eager loading for optimization
        $categories = Category::all(); // Fetch all categories
        return view('admin.productstocks', compact('products', 'categories'));
    }
    
    /**
     * Show the form for creating a new product.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created product in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'Category_ID' => 'required|exists:categories,Category_ID',
            'product_desc' => 'required|string|max:255',
            'price' => 'required|numeric',
            'colors' => 'required|array',
            'colors.*' => 'required|string',
            'quantities' => 'required|array',
            'quantities.*' => 'required|integer|min:1',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Handle image upload
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('img'), $imageName);

        // Create product
        $product = Product::create([
            'name' => $validatedData['name'],
            'product_desc' => $validatedData['product_desc'],
            'Category_ID' => $validatedData['Category_ID'],
            'price' => $validatedData['price'],
            'piece' => array_sum($validatedData['quantities']),
            'image' => $imageName,
        ]);

        // Add colors and stocks
        foreach ($validatedData['colors'] as $index => $color) {
            Color::create([
                'product_id' => $product->product_id,
                'color' => $color,
                'quantity' => $validatedData['quantities'][$index],
            ]);
        }

        return redirect()->route('admin.productstocks')->with('success', 'Product added successfully.');
    }

    /**
     * Show the form for editing the specified product.
     */
    public function edit($id)
    {
        $product = Product::with('colors')->findOrFail($id);
        $categories = Category::all();
        return view('admin.products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified product in storage.
     */
    public function update(Request $request, $id)
{
    // Validate the request
    $validatedData = $request->validate([
        'product_name' => 'required|string|max:255',
        'category' => 'required|exists:categories,Category_ID',
        'product_desc' => 'required|string|max:255',
        'price' => 'required|numeric',
        'available_colors' => 'required|array',
        'available_colors.*' => 'string|max:50',
        'quantities' => 'required|array',
        'quantities.*' => 'integer|min:0',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $product = Product::findOrFail($id);

    // Update product details
    if ($request->hasFile('image')) {
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('img'), $imageName);
        $product->image = $imageName;
    }

    // Calculate the total pieces
    $totalPieces = array_sum($validatedData['quantities']);

    $product->update([
        'name' => $validatedData['product_name'],
        'Category_ID' => $validatedData['category'],
        'price' => $validatedData['price'],
        'piece' => $totalPieces,
    ]);

    // Update colors
    $product->colors()->delete(); // Remove existing colors to replace them
    foreach ($validatedData['available_colors'] as $index => $color) {
        Color::create([
            'product_id' => $product->product_id,
            'color' => $color,
            'quantity' => $validatedData['quantities'][$index],
        ]);
    }

    return redirect()->route('admin.productstocks')->with('success', 'Product updated successfully.');
}


    /**
     * Remove the specified product from storage.
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->colors()->delete(); // Remove associated colors
        $product->delete();

        return redirect()->route('admin.productstocks')->with('success', 'Product deleted successfully.');
    }

   
        public function show($id)
        {
            $product = Product::with('colors')->findOrFail($id);
            $categories = Category::all();
            return view('user.product', compact('product','categories'));
        }
    
    

}
