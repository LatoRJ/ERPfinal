@extends('layouts.customer')

@section('customer-content')
    <div class="bg-green-100 h-16 w-full">
        <div class="w-[100%] h-full flex justify-center items-center text-white text-center bg-[#22303F]">
            Order Successful!
        </div>
    </div>
    <main>
        <div class="h-screen flex bg-white">
            <div class="w-[100%] flex justify-center items-center flex-col px-8 mt-5">
                <h1 class="text-2xl font-bold text-green-600">Thank you for your purchase!</h1>
                <p class="text-lg mt-4">Your order has been placed successfully.</p>
                <p class="text-md mt-2">You will receive a confirmation email shortly.</p>
                <a href="{{ url('/home') }}" class="mt-8 bg-[#22303F] text-white px-4 py-2 rounded">Continue Shopping</a>
            </div>
        </div>
    </main>
@endsection

