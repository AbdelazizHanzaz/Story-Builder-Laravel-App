<?php

namespace App\Http\Livewire;

use App\Models\Story;
use Livewire\Component;

class StoryShow extends Component
{
    public $story;

    public function mount($storyId)
    {
        $this->story = Story::findOrFail($storyId);
    }

    public function render()
    {
        return view('livewire.story-show');
    }
}
