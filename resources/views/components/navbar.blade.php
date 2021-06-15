{{-- ---------------- --}}
{{-- Navbar Component --}}
{{-- ---------------- --}}

@props([
    'activeHome' => false,
    'activeBrowse' => false,
    'activeAbout' => false,
    'activeContact' => false,
    'activeProfile' => false,
    'activeCart' => false,
])

{{-- Check for currently active tab --}}
@switch($currentActive)
    @case("Home")
        @php $activeHome = true; @endphp
        @break
    @case("Browse")
        @php $activeBrowse = true; @endphp
        @break
    @case("About")
        @php $activeAbout = true; @endphp
        @break
    @case("Contact")
        @php $activeContact = true; @endphp
        @break
    @case("Profile")
        @php $activeProfile = true; @endphp
        @break
    @case("Cart")
        @php $activeCart = true; @endphp
        @break
    @default
@endswitch

{{-- Begin View --}}
<header class="flex flex-col shadow-dark z-40">
    {{-- Main div --}}
    <div class="bg-accent-dark text-primary-light font-title mx-0 flex flex-wrap flex-col md:flex-row items-center">

        {{-- Left links --}}
        <nav class="flex lg:w-2/5 flex-wrap items-center text-lg font-bold md:ml-auto">
            <x-nav-link href="{{ route('home') }}" class="md:ml-5" :active="$activeHome">Home</x-nav-link>
            <x-nav-link href="{{ route('browse') }}" :active="$activeBrowse">Browse</x-nav-link>
            <x-nav-link href="{{ route('about') }}" :active="$activeAbout">About</x-nav-link>
            <x-nav-link href="{{ route('contact') }}" :active="$activeContact">Contact</x-nav-link>
        </nav>

        {{-- Middle logo --}}
        <div class="flex order-first lg:order-none lg:w-1/5 font-black tracking-tighter text-shadow-dark items-center text-primary-dark transition duration-500 ease-in-out hover:text-primary-light active:text-primary text-4xl lg:items-center lg:justify-center mb-4 md:mb-0">
            <a href="{{ route('home') }}">UpOn Cart</a>
        </div>

        {{-- Right links --}}
        <nav class="flex lg:w-2/5 flex-wrap item-center text-lg font-normal md:justify-end md:ml-0">
            {{-- Dropdown Profile button --}}
            <div class="hidden sm:flex sm:items-center">
                <x-dropdown align="right" width="40">
                    {{-- Toggle --}}
                    <x-slot name="trigger">
                        <x-nav-btn :active="$activeProfile">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 fill-current" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                            </svg>
                        </x-nav-btn>
                    </x-slot>

                    {{-- Dropdown content --}}
                    <x-slot name="content">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('profile')">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
            {{-- Shopping Cart link --}}
            <x-nav-link href="{{ route('cart') }}" class="md:mr-5" :active="$activeCart">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 fill-current" viewBox="0 0 20 20">
                    <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                </svg>
            </x-nav-link>
        </nav>
    </div>

    {{-- Status bar --}}
    <div class="flex mx-0 px-10 py-1 bg-primary-light text-xs font-semibold text-accent-dark z-40">
        Logged in as: {{ Auth::user()->username }}
    </div>
</header>
