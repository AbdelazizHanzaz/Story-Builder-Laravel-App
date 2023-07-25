<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoryController extends Controller
{
    public function index()
    {
        $stories = Story::all();

        return view('stories.index', compact('stories'));
    }

    public function create()
    {
        return view('stories.create');
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $story = new Story();
        $story->title = $request->input('title');
        $story->content = $request->input('content');
        $story->user_id = Auth::user();
        $story->save();

        return redirect()->route('stories.index')->with('message', 'Story created successfully.');
    }

    public function show(Story $story)
    {
        return view('stories.show', compact('story'));
    }

    public function edit(Story $story)
    {
        return view('stories.edit', compact('story'));
    }

    public function update(Request $request, Story $story)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $story->title = $request->input('title');
        $story->content = $request->input('content');
        $story->save();

        return redirect()->route('stories.show', $story->id)->with('message', 'Story updated successfully.');
    }

    public function destroy(Story $story)
    {
        $story->delete();

        return redirect()->route('stories.index')->with('message', 'Story deleted successfully.');
    }
}
