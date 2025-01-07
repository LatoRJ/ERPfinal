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
    <main>
        <div class="h-screen flex bg-white">
            <div class="w-[25%] px-8 mt-5">
                @include('components.user-sidebar', ['categories' => $categories, 'orders' => $orders])
            </div>
            <div class="flex-1 overflow-y-auto py-2 px-8"> 
                <div class="mt-10 px-15 flex flex-wrap gap-10">
                    @forelse ($products as $product)
                        <div class="w-[200px] h-[300px] text-gray-500 border-2 border-solid border-gray-300 ">
                            <a href="{{ route('product.show', $product->product_id) }}" class="block">
                                <img 
                                    src="{{ asset('img/' . $product->image) }}" 
                                    alt="{{ $product->name }}" 
                                    class="w-full h-[200px] object-cover mb-4"
                                >
                                <div class="mx-2">
                                    <p class="font-bold">{{ $product->name }}</p>
                                    <p class="text-sm line-clamp-1">{{ $product->product_desc ?? 'No description available' }}</p>
                                    <p class="text-green-500 font-semibold">${{ number_format($product->price, 2) }}</p>
                                </div>
                            </a>
                        </div>
                    @empty
                        <p class="text-gray-500">No products available.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </main>
@endsection
