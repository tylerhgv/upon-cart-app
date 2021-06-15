{{-- ----------------------- --}}
{{-- Dropdown Link Component --}}
{{-- ----------------------- --}}

<a {{ $attributes->merge(['class' => 'block px-4 py-2 z-50 text-sm font-medium leading-5 text-accent-dark bg-accent-light hover:bg-primary-lighter focus:outline-none focus:bg-primary-lighter transition duration-300 ease-in-out']) }}>{{ $slot }}</a>
