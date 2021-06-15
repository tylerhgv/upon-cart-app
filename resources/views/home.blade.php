{{-- --------- --}}
{{-- Home Page --}}
{{-- --------- --}}

<x-main-layout currentActive="Home">
    <x-slot name="title">
        Home - UpOn Cart
    </x-slot>
    <div class="flex justify-center items-center text-center pt-20 pb-5 mx-80 border-b-4 border-accent-dark">
        <h1 class="font-title font-extralight text-5xl">Welcome Back, {{ Auth::user()->name }}!</h1>
    </div>
</x-main-layout>
