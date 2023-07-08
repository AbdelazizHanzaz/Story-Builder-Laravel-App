<?php

namespace App\Http\Livewire;

use App\Models\Story;
use Livewire\Component;

class StoryCreate extends Component
{
    public $title;
    public $content;

    protected $rules = [
        'title' => 'required',
        'content' => 'required',
    ];

    public function saveStory()
    {
        $this->validate();

        Story::create([
            'title' => $this->title,
            'content' => $this->content,
        ]);

        session()->flash('message', 'Story created successfully.');

        return redirect()->route('stories.index');
    }

    public function render()
    {
        return view('livewire.story-create');
    }
}
