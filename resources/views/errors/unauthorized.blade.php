<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unauthorized Access</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

  <body class="bg-[#394A56] flex items-center justify-center h-screen">
      <div class="text-center bg-[#E7E8E7] p-10 rounded-lg shadow-md">
          <h1 class="text-4xl font-bold text-red-600">403</h1>
          <h2 class="mt-4 text-2xl font-semibold text-gray-700">Unauthorized Access</h2>
          <p class="mt-2 text-gray-500">You do not have permission to access this page.</p>
          <a href="{{ route('login') }}" class="mt-4 inline-block bg-[#22303F] text-white px-6 py-2 rounded-md hover:bg-[#1a242f]">Go to Login</a>
      </div>
  </body>

</html>
