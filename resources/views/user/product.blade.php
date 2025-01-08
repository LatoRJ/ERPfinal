@extends('layouts.customer')

@section('customer-content')
<div class="bg-gray-200 h-16 w-full flex items-center px-6">
    <a href="/home" class="flex items-center text-gray-700 hover:text-blue-500 transition">
        <x-homeIcon/>
        Home
    </a>
    <span class="mx-2 text-gray-500">›</span>
        <a href="" class="text-blue-500 hover:underline">Product Details</a>
</div>
    <main>
        <div class="h-screen flex bg-white">
            <!-- <div class="w-[25%] px-8 mt-5">
                @include('components.user-sidebar')
            </div> -->
            <div class="flex-1 py-2 px-8"> 
                <div class="mt-10 px-15 flex flex-col items-center gap-10">
                    <img 
                        src="{{ asset('img/' . $product->image) }}" 
                        alt="{{ $product->name }}" 
                        class="w-[300px] h-[300px] object-cover mb-4"
                    >
                    <div class="text-center">
                        <p class="font-bold text-xl">{{ $product->name }}</p>
                        <p class="text-sm">{{ $product->product_desc ?? 'No description available' }}</p>
                        <p class="text-green-500 font-semibold text-lg">${{ number_format($product->price, 2) }}</p>
                    </div>
                    <div class="flex flex-col items-center">
                        <label for="color" class="text-sm mb-2">Choose a color:</label>
                        <select id="color" name="color" class="mb-4">
                            @foreach ($product->colors as $color)
                                <option value="{{ $color->color_id }}">{{ $color->color }}</option>
                            @endforeach
                        </select>
                        <label for="quantity" class="text-sm mb-2">Quantity:</label>
                        <input type="number" id="quantity" name="quantity" value="1" min="1"class="mb-4 w-[100px] text-center">
                        <div class="flex gap-4">
                            <button onclick="addToCart({{ $product->product_id }})" class="bg-[#22303F] hover:bg-gray-600 text-white px-4 py-2">Add to Cart</button>
                            <button onclick="placeOrder({{ $product->product_id }})" class="bg-[#22303F] hover:bg-gray-600 text-white px-4 py-2">Order Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        function addToCart(productId) {
            try {
                var colorId = document.getElementById('color').value;
                var quantity = document.getElementById('quantity').value;
    
                // Convert quantity to a number and check if it's valid
                quantity = parseInt(quantity);
    
                if (isNaN(quantity) || quantity <= 0) {
                    throw new Error('Please enter a valid quantity above 0.');
                }
    
                window.location.href = `/cart/${productId}?color=${colorId}&quantity=${quantity}`;
            } catch (error) {
                alert(error.message);
            }
        }
    
        function placeOrder(productId) {
            try {
                var colorId = document.getElementById('color').value;
                var quantity = document.getElementById('quantity').value;
    
                // Convert quantity to a number and check if it's valid
                quantity = parseInt(quantity);
    
                if (isNaN(quantity) || quantity <= 0) {
                    throw new Error('Please enter a valid quantity above 0.');
                }
    
                window.location.href = `/order/${productId}?color=${colorId}&quantity=${quantity}`;
            } catch (error) {
                alert(error.message);
            }
        }
    </script>
    
@endsection
