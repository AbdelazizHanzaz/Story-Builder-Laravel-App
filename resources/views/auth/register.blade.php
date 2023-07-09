<!-- resources/views/auth/register.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="flex justify-center items-center h-screen">
        <div class="w-full max-w-md">
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <h1 class="text-3xl font-bold mb-6 text-center">Register</h1>
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-6">
                        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                        <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus
                            placeholder="Enter your name"
                            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        @error('name')
                        <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required
                            placeholder="Enter your email"
                            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        @error('email')
                        <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                        <input id="password" type="password" name="password" required
                            placeholder="Enter your password"
                            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        @error('password')
                        <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="password-confirm" class="block text-gray-700 text-sm font-bold mb-2">Confirm Password</label>
                        <input id="password-confirm" type="password" name="password_confirmation" required
                            placeholder="Confirm your password"
                            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>

                    <div class="flex items-center justify-center">
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Register
                        </button>
                    </div>
                </form>
            </div>
            <p class="text-center text-gray-500 text-xs">
                &copy; {{ date('Y') }} Your App. All rights reserved.
            </p>
        </div>
    </div>
@endsection
