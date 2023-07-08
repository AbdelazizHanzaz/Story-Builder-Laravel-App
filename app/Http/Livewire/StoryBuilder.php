<?php


namespace App\Http\Livewire;

use Livewire\Component;

class StoryBuilder extends Component
{
    public $title;
    public $content;
    public $sections = [];

    public function addSection()
    {
        $this->sections[] = ['title' => '', 'content' => ''];
    }

    public function removeSection($index)
    {
        unset($this->sections[$index]);
        $this->sections = array_values($this->sections);
    }

    
    public function saveStory()
{
    // Validate the form fields
    $this->validate([
        'title' => 'required',
        'content' => 'required',
    ]);

    // Create the story
    $story = Story::create([
        'title' => $this->title,
        'content' => $this->content,
        'user_id' => auth()->id(), // Assuming you have authentication implemented
    ]);

    // Save the sections
    foreach ($this->sections as $section) {
        Section::create([
            'title' => $section['title'],
            'content' => $section['content'],
            'story_id' => $story->id,
        ]);
    }

    // Reset the form fields and sections
    $this->reset(['title', 'content', 'sections']);

    // Show a success message or perform any additional actions

    // Redirect or emit an event if needed
}

    

    public function render()
    {
        return view('livewire.story-builder');
    }
}
