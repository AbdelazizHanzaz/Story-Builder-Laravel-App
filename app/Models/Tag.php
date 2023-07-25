<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'slug'
    ];

    public function stories()
    {
        return $this->belongsToMany(Story::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';  
    }

    public static function findBySlug($slug)
    {
        return self::where('slug', $slug)->first();
    }

    public function getSlugAttribute()
    {
        return Str::slug($this->name);
    }

    public function setNameAttribute($name)
    {
        $this->attributes['name'] = ucwords($name); 
        $this->attributes['slug'] = Str::slug($name);
    }
}
