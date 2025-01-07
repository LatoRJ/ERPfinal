@extends('layouts.admin')

@section('admin-content')

        <div id="main-content" class="w-full flex-1 bg-gray-100 transition-all duration-300">
            <x-admin-header/>
            <div class="rounded-lg bg-gray-100 p-6">
                <h1 class="text-2xl font-bold text-gray-700 mb-6">Inbox</h1>
                <div class="flex">
                    <div class="w-1/4 bg-white rounded-lg p-4">
                        <!-- Compose Button -->
                        <button class="w-full bg-blue-500 text-sm font-bold text-white py-2 rounded mb-4">+ Compose</button>
                        <!-- My Email Links -->
                        <ul class="space-y-2">
                            <p class="text-md font-bold">My Email</p>
                            <li class="flex items-center justify-between hover:bg-blue-100 hover:text-blue-500 p-3 rounded cursor-pointer">
                                <div class="flex items-center  gap-x-3">
                                    <!-- Inbox Icon -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 group-hover:text-blue-500" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M19 4H5a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3m-.41 2l-5.88 5.88a1 1 0 0 1-1.42 0L5.41 6ZM20 17a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V7.41l5.88 5.88a3 3 0 0 0 4.24 0L20 7.41Z"/>
                                    </svg>
                                    <!-- Main Text -->
                                    <span class="text-sm font-medium text-gray-700 group-hover:text-blue-500">Inbox</span>
                                </div>
                                <!-- Email Count -->
                                <span class="text-sm text-gray-500">1253</span>
                            </li>
                            <li class="flex items-center justify-between hover:bg-blue-100 hover:text-blue-500 p-3 rounded cursor-pointer">
                                <div class="flex items-center gap-x-3">
                                    <!-- Starred Icon -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 group-hover:text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12M6 12h12" />
                                    </svg>
                                    <!-- Main Text -->
                                    <span class="text-sm font-medium text-gray-700 group-hover:text-blue-500">Starred</span>
                                </div>
                                <!-- Email Count -->
                                <span class="text-sm text-gray-500">245</span>
                            </li>
                            <li class="flex items-center justify-between hover:bg-blue-100 hover:text-blue-500 p-3 rounded cursor-pointer">
                                <div class="flex items-center gap-x-3">
                                    <!-- Sent Icon -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 group-hover:text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 9l3 3-3 3M13 9l3 3-3 3" />
                                    </svg>
                                    <!-- Main Text -->
                                    <span class="text-sm font-medium text-gray-700 group-hover:text-blue-500">Sent</span>
                                </div>
                                <!-- Email Count -->
                                <span class="text-sm text-gray-500">24,532</span>
                            </li>
                            <!-- Additional Email Items -->
                            <li class="flex items-center justify-between hover:bg-blue-100 hover:text-blue-500 p-3 rounded cursor-pointer">
                                <div class="flex items-center gap-x-3">
                                    <!-- Draft Icon -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 group-hover:text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 10L3 12l3 2m9-2l3 2-3 2M6 6l3 2-3 2M9 18l3-2 3 2" />
                                    </svg>
                                    <span class="text-sm font-medium text-gray-700 group-hover:text-blue-500">Draft</span>
                                </div>
                                <span class="text-sm text-gray-500">09</span>
                            </li>
                        </ul>
                        <!-- Labels Section -->
                        <h3 class="mt-6 font-semibold text-gray-700">Label</h3>
                        <ul class="mt-2">
                            <li class="text-blue-400 flex items-center">
                                <input type="checkbox" id="primary" class="mr-2 rounded border-2 border-blue-400 text-blue-400 focus:ring-2 focus:ring-blue-500 appearance-none h-5 w-5 checked:border-blue-400 checked:bg-blue-400 checked:bg-opacity-40">
                                <label for="primary">Primary</label>
                            </li>
                            <li class="text-blue-500 flex items-center">
                                <input type="checkbox" id="social" class="mr-2 rounded border-2 border-green-500 text-blue-500 focus:ring-2 focus:ring-blue-600 appearance-none h-5 w-5 checked:border-blue-500 checked:bg-blue-500 checked:bg-opacity-40">
                                <label for="social">Social</label>
                            </li>
                            <li class="text-yellow-500 flex items-center">
                                <input type="checkbox" id="work" class="mr-2 rounded border-2 border-yellow-500 text-yellow-500 focus:ring-2 focus:ring-yellow-600 appearance-none h-5 w-5 checked:border-yellow-500 checked:bg-yellow-500 checked:bg-opacity-40">
                                <label for="work">Work</label>
                            </li>
                            <li class="text-pink-500 flex items-center">
                                <input type="checkbox" id="friends" class="mr-2 rounded border-2 border-pink-500 text-pink-500 focus:ring-2 focus:ring-pink-600 appearance-none h-5 w-5 checked:border-pink-500 checked:bg-pink-500 checked:bg-opacity-40">
                                <label for="friends">Friends</label>
                            </li>
                        </ul>
                        <!-- Create New Label Button -->
                        <button class="text-gray-400 mt-2 ">+ Create New Label</button>
                    </div>
                    <div class="w-[100%] mx-5 rounded-lg bg-white">
                        <div class="">
                            <div class="relative w-1/2 mx-4 ">
                                <label for="Search" class="sr-only">Search</label>
                                <input type="text" id="Search" placeholder="Search mail" class="w-full rounded-full border-gray-900 py-2.5 px-3 shadow-sm sm:text-sm focus:outline-none focus:ring-4 focus:ring-gray-900" />
                                <span class="absolute inset-y-0 right-0 grid w-10 place-content-center">
                                    <button type="button" class="text-gray-600 hover:text-gray-700">
                                        <span class="sr-only">Search</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                        </svg>
                                    </button>
                                </span>
                            </div>
                        </div>
                        <div class="my-2 py-2">
                            <table class="min-w-full table-auto border-collapse">
                                <tbody>
                                    <tr>
                                        <td class="px-4 py-4 border-b">
                                            <input type="checkbox" id="friends" class="mr-2 rounded border-2 border-gray-500 text-pink-500 focus:ring-2 focus:ring-gray-600 appearance-none h-5 w-5 checked:border-gray-500 checked:bg-gray-500 checked:bg-opacity-40">
                                        </td>
                                        <td class="px-4 py-4 border-b">John Doe</td>
                                        <td class="px-4 py-4 border-b">Hi</td>
                                        <td class="px-4 py-4 border-b text-right">1:00PM</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-4 border-b">
                                            <input type="checkbox" id="friends" class="mr-2 rounded border-2 border-gray-500 text-pink-500 focus:ring-2 focus:ring-gray-600 appearance-none h-5 w-5 checked:border-gray-500 checked:bg-gray-500 checked:bg-opacity-40">
                                        </td>
                                        <td class="px-4 py-4 border-b">Ray Jay</td>
                                        <td class="px-4 py-4 border-b">Hello</td>
                                        <td class="px-4 py-4 border-b text-right">11:30 PM</td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
@endsection