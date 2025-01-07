<link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

<header class="bg-gray-100 shadow-sm py-3">
    <div class="container mx-auto">
        <div class="flex items-center justify-between">
            <!-- Logo Section -->
            <div class="flex items-center mt-2">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('img/AppleVerse.png') }}" class="h-15 w-[200px]" alt="Logo">
                </a>
            </div>

            <!-- Search Bar -->
            <div class="relative w-1/2 mx-4">
                <label for="search" class="sr-only">Search</label>
                <input type="text" id="search" placeholder="Search for anything..."
                    class="w-full rounded-md border-gray-200 py-2.5 pr-10 shadow-sm sm:text-sm" />
                <span class="absolute inset-y-0 right-0 grid w-10 place-content-center">
                    <button type="button" class="text-gray-600 hover:text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="h-5 w-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>
                    </button>
                </span>
            </div>

            <!-- User Account Section -->
            <div class="flex items-center space-x-6">
                <!-- Cart Icon -->
                <a href="{{ route('cart.view') }}" class="relative">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-800 hover:text-blue-600" viewBox="0 0 24 24"
                        fill="currentColor">
                        <path
                            d="M21.822 7.431A1 1 0 0 0 21 7H7.333L6.179 4.23A1.99 1.99 0 0 0 4.333 3H2v2h2.333l4.744 11.385A1 1 0 0 0 10 17h8c.417 0 .79-.259.937-.648l3-8a1 1 0 0 0-.115-.921M17.307 15h-6.64l-2.5-6h11.39z" />
                        <circle cx="10.5" cy="19.5" r="1.5" />
                        <circle cx="17.5" cy="19.5" r="1.5" />
                    </svg>
                </a>

                <!-- Profile Dropdown -->
                <div class="relative">
                    <button id="profileButton"
                        class="flex items-center text-sm font-medium text-black rounded-full hover:text-blue-600">
                        <x-profileIcon/>                        
                        <span class="ml-2">{{ Auth::user()->username }}</span>
                        <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <!-- Dropdown Menu -->
                    <div id="profileDropdown"
                        class="hidden absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-lg shadow-lg">
                        <ul class="text-sm text-gray-700">
                            <li>
                                <a href="{{ route('user.profile') }}" class="flex items-center px-4 py-2 hover:bg-blue-200">
                                    <x-myprofileIcon/>
                                    My Profile
                                </a>
                            </li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit"
                                        class=" w-full flex items-center px-4 py-2 text-sm hover:text-black hover:bg-red-300">
                                        <x-user-logoutIcon/>
                                        Log Out
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<script>
    const profileButton = document.getElementById('profileButton');
    const profileDropdown = document.getElementById('profileDropdown');

    profileButton.addEventListener('click', () => {
        profileDropdown.classList.toggle('hidden');
    });
</script>
