<header class="bg-gray-100 sticky top-0 z-50 shadow-md">
  <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
    <div class="flex h-16 items-center justify-between">
      <div class="md:flex md:items-center md:gap-12">
        <a href="/" class="flex items-center">
          <img src="{{asset('img/AppleVerse.png')}}" class="absolute h-[62px] w-auto ">
      </a>
      </div>

      <div class="flex items-center gap-4">
        <div class="sm:flex sm:gap-4">
          <a class="rounded-md bg-[#22303F] px-5 py-2.5 text-sm font-medium text-white shadow" href="/login">Login</a>

          <div class="hidden sm:flex">
            <a class="rounded-md bg-[#22303F] px-5 py-2.5 text-sm font-medium text-white" href="/signup">Register</a>
          </div>
        </div>

        <div class="block md:hidden">
          <button class="rounded bg-gray-100 p-2 text-gray-600 transition hover:text-gray-600/75">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="size-5"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              stroke-width="2"
            >
              <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
      </div>
    </div>
  </div>
</header>