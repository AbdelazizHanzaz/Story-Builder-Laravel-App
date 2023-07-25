<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function stories()
    {
        return $this->belongsToMany(Story::class);
    }

    public function getNameAttribute($value)
    {
        return ucwords($value); 
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtolower($value);
    }

    public function publishStories()
    {
        $this->stories()->update(['published_at' => now()]);
    }

    public function unpublishStories() 
    {
        $this->stories()->update(['published_at' => null]);
    }
}
