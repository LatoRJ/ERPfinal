<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-color: #394956;
        }
    </style>
</head>
    <body class="min-h-screen flex items-center justify-center">
        <div class="bg-white shadow-lg rounded-lg w-[1200px] h-[650px] flex relative"> 

            <div class="w-1/2 h-full bg-[#22303F] rounded-l-lg flex items-center justify-center">
                <!-- Image Placeholder -->
            </div>
            
            <div class="w-1/2 h-full p-12 flex flex-col justify-center relative">
                <div class="absolute top-0 left-0 right-0 flex items-center justify-center mt-6">
                    <div class="text-center">
                        <h1 class="text-4xl font-bold mb-2">Create an account</h1>
                        <p class="text-gray-600">Enter your details below</p>
                    </div>
                </div>
                <form action="{{ route('signup') }}" method="POST" class="space-y-6 mt-28">
                    @csrf
                    <!-- Username -->
                    <div>
                        <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                        <input type="text" name="username" id="username" placeholder="Create a username"
                            class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#394A56]" required>
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                        <input type="email" name="email" id="email" placeholder="Example@email.com"
                            class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#394A56]" required>
                    </div>

                    <!-- Password Input -->
                    <div class="relative">
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input type="password" name="password" id="password" placeholder="Create a Password"
                            class="mt-1 w-full px-3 py-2 pr-10 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#394A56]" required>
                        <!-- Toggle Icon Button -->
                        <button type="button" onclick="togglePassword('password', 'eye-icon-password')" 
                            class="absolute inset-y-0 right-2 flex items-center text-gray-500">
                            <svg id="eye-icon-password" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path d="M2.458 12C3.732 7.943 7.522 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.478 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </button>
                    </div>

                    <!-- Confirm Password Input -->
                    <div class="relative mt-4">
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password"
                            class="mt-1 w-full px-3 py-2 pr-10 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#394A56]" required>
                        <!-- Toggle Icon Button -->
                        <button type="button" onclick="togglePassword('password_confirmation', 'eye-icon-confirm')" 
                            class="absolute inset-y-0 right-2 flex items-center text-gray-500">
                            <svg id="eye-icon-confirm" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path d="M2.458 12C3.732 7.943 7.522 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.478 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </button>
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button type="submit"
                            class="w-full py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-[#22303F] hover:bg-[#394A56] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#F9E6E6]">
                            Create An Account
                        </button>
                    </div>
                </form>
                <p class="text-sm text-center text-gray-500 mt-6">
                    Already have an account? 
                    <a href="/login" class="font-medium text-[#22303F] hover:text-[#394A56]">Login</a>
                </p>
            </div>
        </div>
    </body>
    
</html>

<script>
    function togglePassword(inputId, iconId) {
    const passwordInput = document.getElementById(inputId);
    const icon = document.getElementById(iconId);

    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        icon.classList.add('text-blue-500');
    } else {
        passwordInput.type = 'password';
        icon.classList.remove('text-blue-500');
    }
}
    </script>>
