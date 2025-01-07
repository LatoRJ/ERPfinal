<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body 
        {
            background-color: #394956;
        }
    </style>
</head>
    <body class="min-h-screen flex items-center justify-center">
        
        <!-- WHOLE CONTAINER-->
        <div class="bg-[#E7E8E7] shadow-lg rounded-lg w-[1200px] h-[650px] flex relative">
            <!--LEFT SIDE CONTAINER -->
            <div class="w-1/2 h-full p-10 flex flex-col justify-center">
                <div class="text-center -mt-12 mb-6">
                    <h1 class="text-5xl font-bold">Login</h1>
                </div>
                <!-- LOG IN FORM-->
                <form action="{{ route('auth.login') }}" method="POST" class="space-y-6">
                    @csrf
                    <!-- EMAIL -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" name="email" id="email" placeholder="Enter Email"
                            class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#394A56]" required>
                    </div>
                    <!-- PASSWORD -->
                    <div class="relative">
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <div class="relative">
                            <!-- Password Input -->
                            <input type="password" name="password" id="password" placeholder="Enter Password"
                                class="mt-1 w-full px-3 py-2 pr-10 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#394A56]" required>
                    
                            <!-- Toggle Button with SVG Icon -->
                            <button type="button" onclick="togglePassword()" class="absolute inset-y-0 right-2 flex items-center">
                                <svg id="toggle-icon" class="w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path id="eye-path" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path d="M2.458 12C3.732 7.943 7.522 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.478 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </button>
                        </div>
                    </div>                    
                    <!--REMEMBER ME AND FORGOT PASSWORD -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember-me" name="remember-me" type="checkbox"
                                class="h-4 w-4 text-[#F9E6E6] focus:ring-[#F9E6E6] border-gray-300 rounded">
                            <label for="remember-me" class="ml-2 text-sm text-gray-900">Remember me</label>
                        </div>
                        <!-- FORGOT PASSWORD -->
                        <div class="text-sm">
                            <a href="/" class="font-medium text-[#22303F] hover:text-[#394A56]">Home</a>
                        </div>
                    </div>
                    <!-- SIGN IN BUTTON -->
                    <div>
                        <button type="submit"
                            class="w-full flex justify-center py-2 px-4 border rounded-md shadow-sm text-sm font-medium text-white bg-[#22303F] hover:bg-[#394A56] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#F9E6E6]">
                            Sign In
                        </button>
                    </div>
                    <!--REGISTER HERE -->
                    <p class="text-sm text-center text-black mt-6">
                        Don't have an account? <a href="/signup" class="font-medium text-[#394A56] hover:text-[#22303F]">Sign up</a>
                    </p>
                </form>
            </div>
            <!-- IMG CONTAINER, RIGHTSIDE -->
            <div class="w-1/2 h-full flex items-center justify-center">
                <div class="w-full h-full shadow rounded-r bg-[#22303F]">
                    <!-- <img src="{{asset('img/pic1.png')}}" alt="" class="absolute right-2 w-[55%] h-auto"> -->
                </div>
            </div>
        </div>
    </body>
</html>

<script>
    function togglePassword() {
    const passwordInput = document.getElementById('password');
    const icon = document.getElementById('toggle-icon');

    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        icon.classList.add('text-blue-500');
    } else {
        passwordInput.type = 'password';
        icon.classList.remove('text-blue-500');
    }
}
</script>