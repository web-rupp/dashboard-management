<nav class="bg-white border-gray-200 border-b-1">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <!-- Logo -->
    <a href="" class="flex items-center space-x-3 rtl:space-x-reverse">
      <img src="{{ url('images/rupp.png') }}" class="h-12" alt="Dashboard" />
      <span class="self-center text-2xl font-semibold whitespace-nowrap">Management</span>
    </a>

    <!-- Primary Navbar items -->
    <div class="hidden md:flex items-center gap-4 md:order-2 space-x-1 md:space-x-0 rtl:space-x-reverse">
      <a
        href="/admin/login"
        class="border rounded-sm text-md font-semibold w-30 py-2 border-[#746eeb] text-[#746eeb] text-center hover:bg-[#746eeb] hover:text-white transition duration-300">
        Login
      </a>
      <a
        href="/admin/register"
        class="border rounded-sm text-md font-semibold w-30 py-2 border-[#746eeb] bg-[#746eeb] text-white text-center hover:bg-white hover:text-[#746eeb] transition duration-300">
        Register
      </a>
    </div>

    <!-- Mobile menu button -->
    <button
      id="mobile-menu-button"
      data-dropdown-toggle="dropdownLeft"
      data-dropdown-placement="bottom"
      type="button"
      class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100">
      <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
      </svg>
    </button>

    <!-- Mobile menu -->
    <div class="hidden md:hidden" id="dropdownLeft">
      <div class="flex flex-col items-center gap-4 bg-black" aria-labelledby="mobile-menu-button">
        <a href="" class="border rounded-sm text-md font-semibold w-30 py-2 border-[#746eeb] text-[#746eeb] text-center">
          Login
        </a>
        <a href="" class="border rounded-sm text-md font-semibold w-30 py-2 border-[#746eeb] bg-[#746eeb] text-white text-center">
          Register
        </a>
      </div>
    </div>
  </div>
</nav>