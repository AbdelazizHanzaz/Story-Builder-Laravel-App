<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'body',
        'user_id',
        'story_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function story()
    {
        return $this->belongsTo(Story::class);
    }

    public function parent()
    {
        return $this->belongsTo(Comment::class, 'parent_id');
    }

    public function replies() 
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }

    public function isReply()
    {
        return ! is_null($this->parent_id);
    }

    public function approve()
    {
        $this->approved = true;
        $this->save(); 
    }

    public function unapprove()
    {
        $this->approved = false;
        $this->save();
    }
}
