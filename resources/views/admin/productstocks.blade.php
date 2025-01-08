@extends('layouts.admin')

@section('admin-content')
        <div id="main-content" class="w-full flex-1 bg-gray-100 transition-all duration-300">
            <x-admin-header/>
            <div class="rounded-lg p-6 ">
                <div class="p-6 bg-white rounded-lg">
                    <h1 class="text-3xl font-bold text-gray-700 mb-6">Product Stocks</h1>
                <button class="mb-4 px-4 py-2 text-sm text-white bg-[#22303F] hover:bg-gray-600 rounded-md" onclick="window.location.href='{{ route('admin.products.create') }}'">Add Product</button>
                <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-sm">
                    <thead class="bg-gray-100 border-b border-gray-200">
                        <tr>
                            <th class="p-4 text-left text-sm font-medium text-gray-500">Image</th>
                            <th class="p-4 text-left text-sm font-medium text-gray-500">Product Name</th>
                            <th class="p-4 text-left text-sm font-medium text-gray-500">Category</th>
                            <th class="p-4 text-left text-sm font-medium text-gray-500">Product Description</th>
                            <th class="p-4 text-left text-sm font-medium text-gray-500">Price</th>
                            <th class="p-4 text-left text-sm font-medium text-gray-500">Piece</th>
                            <th class="p-4 text-left text-sm font-medium text-gray-500">Available Color</th>
                            <th class="p-4 text-left text-sm font-medium text-gray-500">Action</th>
                        </tr>
                    </thead>
                    <tbody>        
                    @foreach ($products as $product)
                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                        <td class="p-4"><img src="{{ asset('img/' . $product->image) }}" alt="Product Image" class="w-10 h-10 rounded-md"></td>
                        <td class="p-4 text-gray-700">{{ $product->name }}</td>
                        <td class="p-4 text-gray-700">{{ $product->category->Category_Name }}</td>
                        <td class="p-4 text-gray-700">{{ $product->product_desc }}</td>
                        <td class="p-4 text-gray-700">${{ $product->price }}</td>
                        <td class="p-4 text-gray-700">{{ $product->piece }}</td>
                        <td class="p-4 text-gray-700">
                            <div class="space-x-1 flex flex-row">
                                @foreach ($product->colors as $color)
                                    <div class="items-center space-x-2">
                                        <div class="flex">
                                            <p class="w-5 h-5 rounded-full" style="background-color: {{ $color->color }};"></p> <!-- Color swatch -->
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </td>
                        <td class="p-4">
                            <button class="px-4 py-2 text-sm text-white bg-blue-500 rounded-md" onclick="window.location.href='{{ route('admin.products.edit', $product->product_id) }}'">Edit</button>
                            <form action="{{ route('admin.products.destroy', $product->product_id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-4 py-2 text-sm text-white bg-red-500 rounded-md">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
                    <div class="mt-4">
                        {{ $products->links('vendor.pagination.tailwind') }}
                    </div>
                </div>
            </div>
            
        </div>
        
        @endsection