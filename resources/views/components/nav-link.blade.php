{{-- --------------------- --}}
{{-- Navbar Link Component --}}
{{-- --------------------- --}}

@props(['active'])

{{-- Apply different style if active --}}
@php
$classes = ($active ?? false)
            ? 'p-4 transition duration-500 ease-in-out text-accent-dark bg-primary-light hover:bg-primary-lighter active:bg-primary'
            : 'p-4 transition duration-500 ease-in-out hover:text-accent-dark hover:bg-primary-lighter active:bg-primary';
@endphp

{{-- Begin View --}}
<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
