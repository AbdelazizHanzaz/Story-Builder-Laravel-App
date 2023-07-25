<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $fillable = [
        'value',
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

    public function getValueAttribute($value)
    {
        return (int) $value;
    }

    public function setValueAttribute($value)
    {
        $this->attributes['value'] = min(5, max(1, $value));
    }

    public static function ratingAvg($storyId)
    {
        return self::where('story_id', $storyId)
                   ->avg('value'); 
    }
}
