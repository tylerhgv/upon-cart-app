{{-- Footer Component --}}
<footer class="text-gray-500 bg-gray-200 font-title">
    {{-- Main div --}}
    <div class="container px-5 py-5 mx-auto flex items-center sm:flex-row flex-col">

        {{-- Logo --}}
        <a href="{{ url('/home') }}" class="flex title-font font-black text-2xl items-center md:justify-start justify-center text-gray-600 transition duration-500 ease-in-out hover:text-accent-dark">
            UpOn Cart
        </a>

        {{-- Version number --}}
        <p class="text-sm sm:ml-4 sm:pl-4 sm:py-2 sm:mt-0 mt-4 sm:border-l-4 border-gray-400 transform scale-90">
            <a href="https://github.com/tylerhgv/upon-cart-app/releases">
                <img src="https://img.shields.io/github/v/tag/tylerhgv/upon-cart-app?label=%20version&style=for-the-badge" class="transform scale-90 opacity-75 transition-opacity duration-500 ease-in-out hover:opacity-100">
            </a>
        </p>

        {{-- Link to source code --}}
        <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
            <a href="https://github.com/tylerhgv/upon-cart-app/" title="Source Code">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 fill-current transition duration-500 ease-in-out hover:text-accent-dark" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </a>
        </span>

    </div>
</footer>
