{{-- ----------------------- --}}
{{-- Navbar Button Component --}}
{{-- ----------------------- --}}

@props(['active'])

{{-- Apply different style if active --}}
@php
$classes = ($active ?? false)
            ? 'p-4 rounded-none flex items-center transition duration-500 ease-in-out text-accent-dark bg-primary-light hover:bg-primary-lighter active:bg-primary focus:outline-none focus:bg-primary-lighter focus:text-accent-dark'
            : 'p-4 rounded-none flex items-center transition duration-500 ease-in-out hover:text-accent-dark hover:bg-primary-lighter active:bg-primary focus:outline-none focus:bg-primary-lighter focus:text-accent-dark';
@endphp

{{-- Begin View --}}
<button {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</button>
