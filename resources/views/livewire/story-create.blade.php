

<div class="flex justify-center items-center h-screen">
    <div class="max-w-lg w-full bg-white rounded-lg shadow-lg">
      <div class="p-6">
        <h1 class="text-3xl font-bold mb-4 text-blue-500 text-center">Create a Story</h1>
        
        <!-- Title -->
        <div class="mb-6">
          <label for="title" class="block mb-2 text-lg font-medium text-blue-500">Title</label>
          <input wire:model="title" type="text" id="title" class="w-full rounded-lg border-2 border-blue-500 px-4 py-2 focus:outline-none focus:border-blue-600" placeholder="Enter the title">
          @error('title') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        
        <!-- Content -->
        <div class="mb-6">
          <label for="content" class="block mb-2 text-lg font-medium text-blue-500">Content</label>
          <textarea wire:model="content" id="content" class="w-full rounded-lg border-2 border-blue-500 px-4 py-2 focus:outline-none focus:border-blue-600" rows="5" placeholder="Enter the content"></textarea>
          @error('content') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        
        <!-- Save Button -->
        <div class="flex justify-center">
          <button wire:click="saveStory" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Save</button>
        </div>
      </div>
    </div>
  </div>