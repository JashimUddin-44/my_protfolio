@if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block d-flex">
         @auth
            <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
            <a href="{{ route('logout') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Logout</a>
         @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"><h4 class="text-center px-3">Log in</h4></a>

        @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline"><h4 class="text-center px-5">Register</h4></a>
        @endif
        @endauth
    </div>
 @endif