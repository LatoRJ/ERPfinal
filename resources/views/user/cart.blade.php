@extends('layouts.customer')

@section('customer-content')
<div class="bg-gray-200 h-16 w-full">
    <div class="w-[10%] h-full flex justify-center items-center text-center bg-gray-200">
        <a href="/home" class="flex items-center text-gray-700 hover:text-blue-500 transition">
            <x-homeIcon/>
            Home
        </a>
    </div>
</div>
    <!-- Cart Table -->
    <div class="bg-white shadow rounded-lg p-6 mx-5">
        <div class="flex justify-between items-center mb-4">
            <a href="/home" class="text-[#22303F] hover:text-blue-600 hover:underline flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" class="mr-2">
                    <path d="M10 19l-7-7 7-7"></path>
                </svg>
                Return to Shop
            </a>
        </div>

        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="border-b">
                    <th class="pb-2">Products</th>
                    <th class="pb-2">Price</th>
                    <th class="pb-2">Quantity</th>
                    <th class="pb-2">Subtotal</th>
                    <th class="pb-2">Action</th>
                </tr>
            </thead>
            <tbody>
                @if(session('cart'))
                    @foreach(session('cart') as $key => $item)
                        <tr class="border-b">
                            <td class="py-4 flex items-center">
                                <input type="checkbox" class="mr-4">
                                <img src="{{ $item['image'] }}" alt="Product Image" class="w-16 h-16 rounded mr-4">
                                <div>
                                    <span class="block font-semibold">{{ $item['name'] }}</span>
                                    <span class="text-sm text-gray-500">Color: {{ $item['color'] }}</span>
                                </div>
                            </td>
                            <td class="py-4">${{ $item['price'] }}</td>
                            <td class="py-4 flex items-center">
                                <button class="bg-gray-300 px-2 py-1">-</button>
                                <span class="px-4">{{ $item['quantity'] }}</span>
                                <button class="bg-gray-300 px-2 py-1">+</button>
                            </td>
                            <td class="py-4">${{ $item['price'] * $item['quantity'] }}</td>
                            <td class="py-4">
                                <form action="{{ route('cart.remove', $key) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M3 6h18v2H3V6zm2 3h14v13H5V9zm5 2v9h4v-9h-4z"></path>
                                        </svg>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="5" class="text-center py-4 text-gray-500">Your cart is empty.</td>
                    </tr>
                @endif
            </tbody>
        </table>

        <!-- Cart Footer -->
        <div class="flex justify-between items-center mt-6">
            <div>
                <button class="text-[#22303F] hover:text-blue-600 hover:underline">Select All</button>
                <button class="text-red-500 hover:text-red-600 hover:underline ml-4">Delete</button>
                <button class="text-[#22303F] hover:text-blue-600 hover:underline ml-4">Move to Wishlist</button>
            </div>
            <div class="text-right">
                <span>Total ({{ session('cart') ? count(session('cart')) : 0 }} items):</span>
                <span class="text-green-600 font-bold">₱{{ session('cart') ? array_sum(array_column(session('cart'), 'quantity')) * array_sum(array_column(session('cart'), 'price')) : 0 }}</span>
            </div>
            <!--
                <a href="" class="bg-blue-500 text-white px-6 py-2 rounded shadow hover:bg-blue-600">Check Out</a> 
            -->
        </div>
    </div>
</div>
@endsection