<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Apple Verse Landing Page</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet' />
    </head>

    <body>
        <x-landing-header/>
        <main class="container mx-auto py-12">
            <section class="text-center mb-12">
                <h2 class="text-4xl font-bold">Welcome to Apple Verse</h2>
                <p class="mt-4 text-lg">Discover the latest Apple products and innovations.</p>
            </section>

            <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="border p-4 rounded-lg shadow bg-white">
                    <img src="{{ asset('img/ip16.png') }}" alt="iPhone 16" class="w-full h-48 object-cover">
                    <h3 class="text-2xl font-bold mt-4">iPhone 16 Pro</h3>
                    <p class="mt-2">The latest iPhone with advanced features.</p>
                    <p class="mt-4 text-xl font-bold">$1999</p>
                </div>

                <div class="border p-4 rounded-lg shadow bg-white">
                    <img src="{{ asset('img/aplwatch.jpg') }}" alt="Apple Watch" class="w-full h-48 object-cover">
                    <h3 class="text-2xl font-bold mt-4">Apple Watch</h3>
                    <p class="mt-2">The ultimate device for a healthy life.</p>
                    <p class="mt-4 text-xl font-bold">$399</p>
                </div>

            <div class="border p-4 rounded-lg shadow bg-white"> 
                <img src="{{ asset('img/macbook.jpg') }}" alt="MacBook Pro" class="w-full h-48 object-cover"> 
                <h3 class="text-2xl font-bold mt-4">MacBook Pro</h3> 
                <p class="mt-2">High-performance laptop for professionals.</p> 
                <p class="mt-4 text-xl font-bold">$1999</p> 
            </div>
            </section>

            <section class="mt-12">
                <h3 class="text-3xl font-bold text-center">Why Choose Apple Products?</h3>
                <p class="mt-4 text-center text-lg">Apple products are known for their innovative design, seamless integration, and exceptional performance. Whether you're looking for the latest iPhone, a powerful MacBook, or a smartwatch to keep you connected and healthy, Apple has something for everyone.</p>
            </section>

            <section class="mt-12 text-center">
                <h3 class="text-3xl font-bold">Customer Reviews</h3>
                <div class="mt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="border p-4 rounded-lg shadow bg-white">
                        <p class="italic">"The new iPhone is a game changer! The camera quality is outstanding and the performance is top-notch."</p>
                        <p class="mt-4 font-bold">- Shaica </p>
                    </div>
                    <div class="border p-4 rounded-lg shadow bg-white">
                        <p class="italic">"I love my MacBook Pro! It's perfect for my professional needs and the Retina display is stunning."</p>
                        <p class="mt-4 font-bold">- Rennan</p>
                    </div>
                    <div class="border p-4 rounded-lg shadow bg-white">
                        <p class="italic">"The Apple Watch has helped me stay on top of my fitness goals and keep connected on the go."</p>
                        <p class="mt-4 font-bold">- Kabet</p>
                    </div>
                </div>
            </section>
        </main>

        <footer class="bg-white shadow mt-12">
            <div class="container mx-auto p-6 text-center">
                <p class="text-gray-600">&copy; 2025 Apple Verse. All rights reserved.</p>
            </div>
        </footer>
    </body>
</html>
