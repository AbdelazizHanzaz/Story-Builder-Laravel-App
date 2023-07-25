<!-- resources/views/partials/navigation.blade.php -->

<nav class="flex items-center justify-between flex-wrap bg-blue-900 p-6">
    <div class="flex items-center flex-shrink-0 text-white mr-6">
        <!-- Add your logo image  <img class="h-8 w-8 mr-2" src="/path/to/logo.png" alt="Logo">  -->
        <span class="font-semibold text-xl tracking-tight">Story-Builder</span>
    </div>
    <div class="w-full flex items-center justify-evenly lg:w-auto">
        <div class="text-sm lg:flex-grow mx-8">
            <a href="/" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-gray-300 mr-4">
                Welcome
            </a>
            <a href="/#about" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-gray-300 mr-4">
                About
            </a>
            <a href="/#contact-us" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-gray-300">
                Contact
            </a>
            @auth
            <a href="{{ route('stories.index') }}" class="block mt-4 mx-4 lg:inline-block lg:mt-0 text-white hover:text-gray-300">
                Stories
            </a>
            @endauth
        </div>
        <div class="flex justify-end gap-3">
            @auth
            <a href="{{ route('stories.create') }}" class="bg-blue-700 text-sm px-4 py-2 leading-none border rounded text-white border-white  hover:bg-blue-800 mt-4 lg:mt-0">
                Add story
           </a>
            <form action="{{ route('logout') }}" method="POST" class="inline-block">
                @csrf
                <button type="submit" class="bg-red-700 text-sm px-4 py-2 leading-none border rounded text-white border-white mt-4 lg:mt-0">Logout</button>
            </form>
                @else
                <a href="{{ route('login') }}" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-blue-500 hover:bg-white mt-4 lg:mt-0">Login</a>
                <a href="{{ route('register') }}" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-blue-500 hover:bg-white mt-4 lg:mt-0">Register</a>
            @endauth
        </div>
    </div>
</nav>
    
