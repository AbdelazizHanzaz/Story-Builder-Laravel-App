<?php

namespace App\Http\Livewire;

use App\Models\Story;
use Livewire\Component;

class StoryEdit extends Component
{
    public $story;

    public function mount($storyId)
    {
        $this->story = Story::findOrFail($storyId);
    }

    public function update()
    {
        $this->validate([
            'story.title' => 'required',
            'story.content' => 'required',
        ]);

        $this->story->save();

        session()->flash('message', 'Story updated successfully.');

        return redirect()->route('stories.show', $this->story->id);
    }

    public function render()
    {
        return view('livewire.story-edit');
    }
}
