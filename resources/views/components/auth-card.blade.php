{{-- ------------------------ --}}
{{-- Authentication Component --}}
{{-- ------------------------ --}}

<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 font-body bg-accent-dark bg-hero-i-like-food">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-dark overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
