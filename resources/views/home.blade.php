<!-- resources/views/home.blade.php -->

@extends('layouts.app')

@section('content')
    <livewire:flash-message>
    <!-- Hero Section -->
    <div class="bg-blue-500 py-20" id="hero">
        <div class="container mx-auto px-4">
            <div class="text-center text-white">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">Welcome to Story Builder</h1>
                <p class="text-lg md:text-xl mb-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et ligula et tortor lacinia gravida. Vivamus eleifend vulputate dui, ac lacinia tellus laoreet in. Sed vitae lacus non tellus dapibus pharetra.</p>
                <a href="#" class="bg-white text-blue-500 font-bold py-2 px-6 rounded-full hover:bg-blue-100">Learn More</a>
            </div>
        </div>
    </div>

    <!-- About Section -->
    <div class="py-16" id="about">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <h2 class="text-2xl md:text-4xl font-bold mb-6">About Us</h2>
                <p class="text-lg md:text-xl text-gray-700 mb-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et ligula et tortor lacinia gravida. Vivamus eleifend vulputate dui, ac lacinia tellus laoreet in. Sed vitae lacus non tellus dapibus pharetra.</p>
                <a href="#" class="text-blue-500 font-bold hover:underline">Read More</a>
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <div class="bg-gray-200 py-16" id="contact-us">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <h2 class="text-2xl md:text-4xl font-bold mb-6">Contact Us</h2>
                <p class="text-lg md:text-xl text-gray-700 mb-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et ligula et tortor lacinia gravida. Vivamus eleifend vulputate dui, ac lacinia tellus laoreet in. Sed vitae lacus non tellus dapibus pharetra.</p>
                <a href="#" class="bg-blue-500 text-white font-bold py-2 px-6 rounded-full hover:bg-blue-600">Get in Touch</a>
            </div>
        </div>
    </div>
@endsection
