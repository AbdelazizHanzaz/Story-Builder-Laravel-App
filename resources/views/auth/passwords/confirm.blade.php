@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <div class="max-w-md mx-auto mt-10">
        <div class="bg-white p-8 shadow-md">
            <h2 class="text-2xl font-semibold text-center mb-6">{{ __('Confirm Password') }}</h2>

            <p class="mb-6">{{ __('Please confirm your password before continuing.') }}</p>

            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf

                <div class="mb-6">
                    <label for="password" class="block mb-1">{{ __('Password') }}</label>
                    <input id="password" type="password" class="w-full border border-gray-300 rounded-md py-2 px-3 @error('password') border-red-500 @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-center">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition duration-200">
                        {{ __('Confirm Password') }}
                    </button>
                </div>

                @if (Route::has('password.request'))
                    <div class="text-center mt-4">
                        <a class="text-blue-500 hover:text-blue-700 underline" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    </div>
                @endif
            </form>
        </div>
    </div>
</div>
@endsection
