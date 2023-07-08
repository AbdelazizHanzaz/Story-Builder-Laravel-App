<!-- resources/views/livewire/story-edit.blade.php -->

<div>
    <h2 class="text-2xl font-bold mb-4">Edit Story</h2>
    @if (session()->has('message'))
        <div class="mb-4 text-green-500">{{ session('message') }}</div>
    @endif
    <form wire:submit.prevent="update">
        <div class="mb-4">
            <label for="title" class="block font-bold">Title</label>
            <input wire:model="story.title" type="text" id="title" class="border rounded p-2 w-full">
            @error('story.title') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label for="content" class="block font-bold">Content</label>
            <textarea wire:model="story.content" id="content" rows="5" class="border rounded p-2 w-full"></textarea>
            @error('story.content') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        <div>
            <button type="submit" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Update</button>
        </div>
    </form>
</div>
