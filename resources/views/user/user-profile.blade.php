@extends('layouts.customer')

@section('customer-content')

<div class="bg-gray-200 h-16 w-full flex items-center px-6">
    <!-- Home Icon and Link -->
    <a href="/home" class="flex items-center text-gray-700 hover:text-blue-500 transition">
        <x-homeIcon/>
        Home
    </a>
</div>
<div class="w-full bg-white border-2 border-solid border-gray-200 shadow-2xl mx-5">
    <div class="mx-10 my-5">
        <h1 class="font-bold text-lg">MY PROFILE</h1>
        <h5 class="text-sm">Manage and protect your account.</h5>
    </div>
    <p class="my-2 mx-10 border-b-2 border-solid border-gray-300"></p>
    <div class="flex flex-row space-y-3">
        <div class="flex-1 bg-white px-8 py-5 shadow-md">
            <form class="space-y-3" method="POST" action="{{ route('user.update') }}">
                @csrf
                @method('PUT')

                <!-- Username -->
                <div class="flex">
                    <div class="flex items-center justify-center pr-[5.1rem]">
                        <label class="block text-sm font-medium text-gray-700">Username</label>
                    </div>
                    <input type="text" name="username" value="{{ old('username', Auth::user()->username) }}" 
                        class="w-full mt-1 p-2 border border-gray-300 rounded-md" required>
                </div>

                <!-- First Name -->
                <div class="flex">
                    <div class="flex items-center justify-center pr-[5.5rem]">
                        <label class="block text-sm font-medium text-gray-700">First Name</label>
                    </div>
                    <input type="text" name="firstname" value="{{ old('firstname', Auth::user()->firstname) }}" 
                        class="w-full mt-1 p-2 border border-gray-300 rounded-md" required>
                </div>

                <!-- Last Name -->
                <div class="flex">
                    <div class="flex items-center justify-center pr-[5.5rem]">
                        <label class="block text-sm font-medium text-gray-700">Last Name</label>
                    </div>
                    <input type="text" name="lastname" value="{{ old('lastname', Auth::user()->lastname) }}" 
                        class="w-full mt-1 p-2 border border-gray-300 rounded-md" required>
                </div>

                <!-- Email -->
                <div class="flex">
                    <div class="flex items-center justify-center pr-[7.2rem]">
                        <label class="block text-sm font-medium text-gray-700">Email</label>
                    </div>
                    <div class="flex items-center">
                        <input type="email" name="email" value="{{ Auth::user()->email }}" 
                            class="flex-1 p-2 border border-gray-100 rounded-md" disabled>
                        <a href="#" class="ml-4 text-blue-500">Change</a>
                    </div>
                </div>

                <!-- Phone Number -->
                <div class="flex">
                    <div class="flex items-center justify-center pr-[3.2rem]">
                        <label class="block text-sm font-medium text-gray-700">Phone Number</label>
                    </div>
                    <div class="flex items-center">
                        <input type="text" name="phone" value="{{ old('phone', Auth::user()->phone) }}" 
                            class="flex-1 p-2 border border-gray-100 rounded-md" disabled>
                        <a href="#" class="ml-4 text-blue-500">Change</a>
                    </div>
                </div>

                <!-- Gender -->
                <div class="flex">
                    <div class="flex items-center justify-center">
                        <label class="block text-sm font-medium text-gray-700 pr-[7.2rem]"> Gender</label>
                    </div>
                    <div class="flex items-center space-x-4">
                        <label class="flex items-center">
                            <input type="radio" name="gender" value="Male" 
                                class="h-4 w-4 border-gray-300" {{ Auth::user()->gender == 'Male' ? 'checked' : '' }}>
                            <span class="ml-2">Male</span>
                        </label>
                        <label class="flex items-center">
                            <input type="radio" name="gender" value="Female" 
                                class="h-4 w-4 border-gray-300" {{ Auth::user()->gender == 'Female' ? 'checked' : '' }}>
                            <span class="ml-2">Female</span>
                        </label>
                        <label class="flex items-center">
                            <input type="radio" name="gender" value="Other" 
                                class="h-4 w-4 border-gray-300" {{ Auth::user()->gender == 'Other' ? 'checked' : '' }}>
                            <span class="ml-2">Other</span>
                        </label>
                    </div>
                </div>

                <!-- Date of Birth -->
                <div class="flex">
                    <div class="flex items-center justify-center pr-[4.2rem]">
                        <label class="block text-sm font-medium text-gray-700">Date of Birth</label>
                    </div>
                    <div class="flex items-center">
                        <input type="text" name="dob" value="{{ old('dob', Auth::user()->dob) }}" 
                            class="flex-1 p-2 border border-gray-100 rounded-md" disabled>
                        <a href="#" class="ml-4 text-blue-500">Change</a>
                    </div>
                </div>

                <!-- Save Button -->
                <div class="pb-[50px]">
                    <button type="submit" class="px-6 py-2 bg-gray-700 text-white rounded-md">SAVE</button>
                </div>
            </form>
        </div>

        <div class="w-[40%] bg-white p-8 shadow-md flex flex-col items-center">
            <div>
                <img src="https://via.placeholder.com/100" alt="Profile" class="w-24 h-24 rounded-full">
            </div>
            <button class="mt-4 px-4 py-2 border border-gray-300 rounded-md">Select Image</button>
            <p class="mt-2 text-gray-500 text-sm">File size: maximum 1 MB<br>File extension: .JPEG, .PNG</p>
        </div>
    </div>
</div>
@endsection
