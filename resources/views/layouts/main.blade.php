{{-- --------------- --}}
{{-- Main App Layout --}}
{{-- --------------- --}}

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ $title ?? 'UpOn Cart' }}</title>

        <!-- Add CSS & JS -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Custom Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    </head>

    <body class="font-body bg-white">
        {{-- Main div --}}
        <div class="flex flex-col h-screen">

            {{-- Header --}}
            <div class="flex-initial z-40 sticky top-0 self-stretch">
                <x-navbar :currentActive="$currentActive" />
            </div>

            {{-- Body --}}
            <div class="flex-1 z-0">
                {{ $slot }}
            </div>

            {{-- Footer --}}
            <div class="flex-initial z-0">
                <x-footer />
            </div>

        </div>
    </body>
</html>
