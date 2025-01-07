<div class="p-4 flex justify-between items-center">
    <h2 class="font-bold text-lg sidebar-text">Admin Panel</h2>
    <button id="sidebarToggle" class="text-[#22303F] hover:text-gray-500">
        <i class="bx bx-menu-alt-left text-xl"></i>
    </button>
</div>
<nav class="mt-4 space-y-2">                
    <a href="{{ route('dashboard') }}" class="flex items-center p-2 text-gray-700 hover:text-blue-500 hover:bg-blue-100 rounded-md transition-colors {{ request()->is('dashboard') ? 'bg-blue-100 text-blue-500' : '' }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="w-6 h-6" viewBox="0 0 24 24">
            <path fill="currentColor" d="M2 6.5c0-2.121 0-3.182.659-3.841S4.379 2 6.5 2s3.182 0 3.841.659S11 4.379 11 6.5s0 3.182-.659 3.841S8.621 11 6.5 11s-3.182 0-3.841-.659S2 8.621 2 6.5m11 11c0-2.121 0-3.182.659-3.841S15.379 13 17.5 13s3.182 0 3.841.659S22 15.379 22 17.5s0 3.182-.659 3.841S19.621 22 17.5 22s-3.182 0-3.841-.659S13 19.621 13 17.5m-11 0c0-2.121 0-3.182.659-3.841S4.379 13 6.5 13s3.182 0 3.841.659S11 15.379 11 17.5s0 3.182-.659 3.841S8.621 22 6.5 22s-3.182 0-3.841-.659S2 19.621 2 17.5m11-11c0-2.121 0-3.182.659-3.841S15.379 2 17.5 2s3.182 0 3.841.659S22 4.379 22 6.5s0 3.182-.659 3.841S19.621 11 17.5 11s-3.182 0-3.841-.659S13 8.621 13 6.5" />
        </svg>
        <span class="ml-3 sidebar-text">Dashboard</span>
    </a>
    <a href="{{ route('admin.productstocks') }}" class="flex items-center p-2 text-gray-700 hover:text-blue-500 hover:bg-blue-100 rounded-md group transition-colors {{ request()->is('productstocks') ? 'bg-blue-100 text-blue-500' : '' }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="w-6 h-6 transition-colors text-gray-700 group-hover:text-blue-500" viewBox="0 0 24 24">
            <path fill="currentColor" d="M12 14L1 8l11-6l11 6zm0 4L1.575 12.325l2.1-1.15L12 15.725l8.325-4.55l2.1 1.15zm0 4L1.575 16.325l2.1-1.15L12 19.725l8.325-4.55l2.1 1.15z" />
        </svg>
        <span class="ml-3 sidebar-text group-hover:text-blue-500">Product Stocks</span>
    </a>
    <a href="{{ route('inbox') }}" class="flex items-center p-2 text-gray-700 hover:text-blue-500 hover:bg-blue-100 rounded-md transition-colors {{ request()->is('inbox') ? 'bg-blue-200 text-blue-600' : '' }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="w-6 h-6" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.84 8.84 0 0 1-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7M7 9H5v2h2zm8 0h-2v2h2zM9 9h2v2H9z" clip-rule="evenodd" />
        </svg>
        <span class="ml-3 sidebar-text">Inbox</span>
    </a>
    <a href="orders" class="flex items-center p-2 text-gray-700 hover:text-blue-500 hover:bg-blue-100 rounded-md group transition-colors {{ request()->is('orders') ? 'bg-blue-100 text-blue-500' : '' }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="w-6 h-6 transition-colors text-gray-700 group-hover:text-blue-500" viewBox="0 0 24 24">
            <path fill="currentColor" fill-rule="evenodd" d="M5.586 4.586C5 5.172 5 6.114 5 8v9c0 1.886 0 2.828.586 3.414S7.114 21 9 21h6c1.886 0 2.828 0 3.414-.586S19 18.886 19 17V8c0-1.886 0-2.828-.586-3.414S16.886 4 15 4H9c-1.886 0-2.828 0-3.414.586M9 8a1 1 0 0 0 0 2h6a1 1 0 1 0 0-2zm0 4a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2zm0 4a1 1 0 1 0 0 2h4a1 1 0 1 0 0-2z" clip-rule="evenodd"/>
        </svg>
        <span class="ml-3 sidebar-text group-hover:text-blue-500">Order Lists</span>
    </a>
    <a href="{{ route('invoice') }}"class="flex items-center p-2 text-gray-700 hover:text-blue-500 hover:bg-blue-100 rounded-md group transition-colors {{ request()->is('invoice') ? 'bg-blue-100 text-blue-500' : '' }}">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 transition-colors text-gray-700 group-hover:text-blue-500" viewBox="0 0 24 24">
            <defs>
                <mask id="solarCardBold0">
                    <g fill="none">
                        <path fill="#fff" d="M14 4h-4C6.229 4 4.343 4 3.172 5.172c-.844.843-1.08 2.057-1.146 4.078h19.948c-.066-2.021-.302-3.235-1.146-4.078C19.657 4 17.771 4 14 4m-4 16h4c3.771 0 5.657 0 6.828-1.172S22 15.771 22 12q0-.662-.002-1.25H2.002Q1.999 11.338 2 12c0 3.771 0 5.657 1.172 6.828S6.229 20 10 20" />
                        <path fill="#000" fill-rule="evenodd" d="M5.25 16a.75.75 0 0 1 .75-.75h4a.75.75 0 0 1 0 1.5H6a.75.75 0 0 1-.75-.75m6.5 0a.75.75 0 0 1 .75-.75H14a.75.75 0 0 1 0 1.5h-1.5a.75.75 0 0 1-.75-.75" clip-rule="evenodd" />
                    </g>
                </mask>
            </defs>
            <path fill="currentColor" d="M0 0h24v24H0z" mask="url(#solarCardBold0)" />
        </svg>
        <span class="ml-3 sidebar-text group-hover:text-blue-500">Invoice</span>
    </a>
</nav>
<script>
    const sidebarToggle = document.querySelector("#sidebarToggle");
    const sidebar = document.querySelector("#sidebar");
    const sidebarTexts = document.querySelectorAll(".sidebar-text");
    const mainContent = document.querySelector("#main-content");

    sidebarToggle.addEventListener("click", function () {
        //FIXED SIDEBARS
        sidebar.classList.toggle("w-[20%]");
        sidebar.classList.toggle("w-[4%]");

        sidebarTexts.forEach((text) => {
            text.classList.toggle("hidden");
        });

        if (sidebar.classList.contains("w-[20%]")) {
            mainContent.style.width = "80%";
        } else {
            mainContent.style.width = "95%";
        }
    });
</script>