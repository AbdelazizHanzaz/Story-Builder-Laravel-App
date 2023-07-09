<!-- resources/views/auth/login.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="flex justify-center items-center h-screen">
        <div class="w-full max-w-xs">
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <h1 class="text-2xl font-bold mb-6 text-center">Login</h1>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        @error('email')
                        <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                        <input id="password" type="password" name="password" required
                            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        @error('password')
                        <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center justify-between">
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Sign In
                        </button>
                        <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800"
                            href="{{ route('password.request') }}">
                            Forgot Password?
                        </a>
                    </div>
                </form>
            </div>
            <p class="text-center text-gray-500 text-xs">
                &copy; {{ date('Y') }} Your App. All rights reserved.
            </p>
        </div>
    </div>
@endsection
