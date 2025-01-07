<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Dashboard</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet' />
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    </head>
    <div class="flex h-screen">
        <aside id="sidebar" class="bg-[#FFFFFF] text-black w-[20%] transition-all duration-300 min-h-screen">
            <x-admin-sidebar/>
        </aside>
        @yield('admin-content')
    </div>