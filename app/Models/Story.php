<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Story extends Model
{

    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'published_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function sections()
    {
        return $this->hasMany(Section::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    public function media()
    {
        return $this->hasMany(Media::class);
    }

    public function isPublished()
    {
        return !is_null($this->published_at);
    }

    public function publish()
    {
        $this->published_at = now();
        $this->save();
    }

    public function unpublish()
    {
        $this->published_at = null;
        $this->save();
    }
}
