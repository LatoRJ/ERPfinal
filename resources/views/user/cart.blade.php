@extends('layouts.customer')

@section('customer-content')
    <div class="bg-gray-200 h-16 w-full">
        <div class="w-[10%] h-full flex justify-center items-center text-center bg-gray-200">
            Cart
        </div>
    </div>
    <main>
        <div class="h-screen flex bg-white">
            <div class="w-[25%] px-8 mt-5">
                @include('components.user-sidebar')
            </div>
            <div class="flex-1 overflow-y-auto py-2 px-8"> 
                <div class="mt-10 px-15">
                    <h1 class="text-2xl font-bold">Your Cart</h1>
                    @if(session('cart'))
                        <table class="mt-5 w-full">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Color</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach(session('cart') as $key => $details)
                                    <tr>
                                        <td>{{ $details['name'] }}</td>
                                        <td>{{ $details['color'] }}</td>
                                        <td>{{ $details['quantity'] }}</td>
                                        <td>${{ $details['price'] }}</td>
                                        <td>${{ $details['price'] * $details['quantity'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="mt-5">
                            <strong>Total: ${{ array_sum(array_map(function($item) { return $item['price'] * $item['quantity']; }, session('cart'))) }}</strong>
                        </div>
                    @else
                        <p class="text-gray-500">Your cart is empty.</p>
                    @endif
                </div>
            </div>
        </div>
    </main>
@endsection
