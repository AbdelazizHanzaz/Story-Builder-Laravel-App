<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Storage;

class Media extends Model
{
    use HasFactory;

    protected $fillable = [
        'file_name',
        'file_size',
        'mime_type'
    ];

    public function story()
    {
        return $this->belongsTo(Story::class);
    }

    public function getUrlAttribute()
    {
        return Storage::url($this->file_path);
    }


    function formatSizeUnits($bytes)
    {

        if ($bytes >= 1073741824) {
            $bytes = number_format($bytes / 1073741824, 2) . ' GB';
        } elseif ($bytes >= 1048576) {
            $bytes = number_format($bytes / 1048576, 2) . ' MB';
        } elseif ($bytes >= 1024) {
            $bytes = number_format($bytes / 1024, 2) . ' KB';
        } elseif ($bytes > 1) {
            $bytes = $bytes . ' bytes';
        } elseif ($bytes == 1) {
            $bytes = $bytes . ' byte';
        } else {
            $bytes = '0 bytes';
        }

        return $bytes;
    }

    public function getFileSizeAttribute($value)
    {
        return self::formatSizeUnits($value); // helper method
    }

    public static function validate($file)
    {
        $maxSize = Config::get('media.max_size');

        $allowedMimeTypes = Config::get('media.mime_types');

        if ($file->getSize() > $maxSize) {
            throw new \Exception('File is too large');
        }

        if (!in_array($file->getMimeType(), $allowedMimeTypes)) {
            throw new \Exception('Invalid file type');
        }
    }

    public static function upload(UploadedFile $file)
    {
        self::validate($file);

        $name = uniqid() . '_' . $file->getClientOriginalName();

        $path = $file->storePubliclyAs('uploads', $name);

        return new self([
            'file_name' => $name,
            'file_path' => $path,
            'file_size' => $file->getSize(),
            'mime_type' => $file->getMimeType(),
        ]);
    }
}
