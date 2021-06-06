{{-- Navbar Component --}}
<header class="bg-accent-dark text-primary-light font-title shadow-dark">
    {{-- Main div --}}
    <div class="mx-auto flex flex-wrap flex-col md:flex-row items-center">

        {{-- Left links --}}
        <nav class="flex lg:w-2/5 flex-wrap items-center text-lg font-semibold md:ml-auto">
            <a href="{{ url('/home') }}" class="p-5 md:ml-5 transition duration-500 ease-in-out hover:text-accent-dark hover:bg-primary-light active:bg-primary">Home</a>
            <a href="{{ url('/browse') }}" class="p-5 transition duration-500 ease-in-out hover:text-accent-dark hover:bg-primary-light active:bg-primary">Browse</a>
            <a href="{{ url('/about') }}" class="p-5 transition duration-500 ease-in-out hover:text-accent-dark hover:bg-primary-light active:bg-primary">About</a>
            <a href="{{ url('/contact') }}" class="p-5 transition duration-500 ease-in-out hover:text-accent-dark hover:bg-primary-light active:bg-primary">Contact</a>
        </nav>

        {{-- Middle logo --}}
        <div class="flex order-first lg:order-none lg:w-1/5 font-black items-center text-primary-dark transition duration-500 ease-in-out hover:text-primary-light active:text-primary text-4xl lg:items-center lg:justify-center mb-4 md:mb-0">
            <a href="{{ url('/home') }}">UpOn Cart</a>
        </div>

        {{-- Right links --}}
        <nav class="flex lg:w-2/5 flex-wrap item-center text-lg font-normal md:justify-end md:ml-0">
            <a href="{{ url('/profile') }}" title="User Profile" class="p-5 flex items-center transition duration-500 ease-in-out hover:text-accent-dark hover:bg-primary-light active:bg-primary">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 fill-current" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                </svg>
            </a>
            <a href="{{ url('/cart') }}" title="Shopping Cart" class="p-5 md:mr-5 flex items-center transition duration-500 ease-in-out hover:text-accent-dark hover:bg-primary-light active:bg-primary">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 fill-current" viewBox="0 0 20 20">
                    <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                </svg>
            </a>
        </nav>

    </div>
</header>
