@extends('layouts.customer')

@section('customer-content')
<div class="bg-gray-200 h-16 w-full flex items-center px-6">
    <!-- Home Icon and Link -->
    <a href="/home" class="flex items-center text-gray-700 hover:text-blue-500 transition">
        <x-homeIcon/>
        Home
    </a>
    <span class="mx-2 text-gray-500">›</span>
    <a href="/purchase-history" class="text-blue-500 hover:underline">Purchase History</a>
</div>

<main>
    <div class="h-8xl flex bg-white mx-5">
        <div class="flex-1 overflow-y-auto py-2 px-8">
            <h2 class="text-xl font-bold mb-4 text-gray-700 py-5">Your Purchase History</h2>
            <ul class="space-y-3">
                @foreach ($orders as $order)
                    <li class="border p-3 rounded">
                        <div class="flex justify-between items-center">
                            <div>
                                <p class="font-bold">{{ $order->product->name }}</p>
                                <p class="text-sm">Color: {{ $order->color->color }}</p>
                                <p class="text-sm">Quantity: {{ $order->quantity }}</p>
                                <p class="text-sm">Price per item: ${{ number_format($order->product->price, 2) }}</p>
                                <p class="text-sm">Purchased on: {{ $order->created_at->format('d M Y') }}</p>
                            </div>
                            <div class="text-right">
                                <p class="font-bold text-green-600">Total: ${{ number_format($order->quantity * $order->product->price, 2) }}</p>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</main>
@endsection
