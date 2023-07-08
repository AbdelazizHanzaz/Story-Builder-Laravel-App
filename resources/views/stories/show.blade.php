@extends('layouts.app')

@section('content')
    <div>
        <h2 class="text-2xl font-bold mb-4">{{ $story->title }}</h2>
        <p>{{ $story->content }}</p>
        <livewire:section-create :storyId="$story->id" />
        <!-- Display existing sections here -->
    </div>
@endsection