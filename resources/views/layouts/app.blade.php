<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Story Builder App</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <!-- Fonts -->
     <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
     @vite('resources/css/app.css')
    
    @livewireStyles
</head>

<body>
   


    @include('layouts.partials.navigation')

    <main>
        <div class="container mx-auto px-4 mt-8">
            @yield('content')
        </div>
    </main>

    <footer class="bg-gray-200 py-4 mt-8">
        <div class="container mx-auto px-4">
            <p class="text-center text-gray-600">&copy; {{ date('Y') }} Story Builder App. All rights reserved.</p>
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
    @livewireScripts
</body>

</html>
