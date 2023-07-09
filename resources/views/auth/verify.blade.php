@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <div class="max-w-md mx-auto mt-10">
        <div class="bg-white p-8 shadow-md">
            @if (session('resent'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <span class="block sm:inline">{{ __('A fresh verification link has been sent to your email address.') }}</span>
                </div>
            @endif

            <h2 class="text-2xl font-semibold text-center mb-4">{{ __('Verify Your Email Address') }}</h2>

            <p class="mb-4">{{ __('Before proceeding, please check your email for a verification link.') }}</p>
            <p class="mb-6">{{ __('If you did not receive the email') }},</p>

            <form class="flex items-center" method="POST" action="{{ route('verification.resend') }}">
                @csrf

                <button type="submit" class="text-blue-500 hover:text-blue-700 underline">{{ __('click here to request another') }}</button>.
            </form>
        </div>
    </div>
</div>
@endsection

