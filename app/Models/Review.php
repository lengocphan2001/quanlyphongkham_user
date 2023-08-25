<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Review extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'thumbnail', 'name', 'content'];

    public function getThumbnailAttribute() {
        if (empty($this->getAttributes()['thumbnail'])) {
            return '/images/default_thumbnail.jpg';
        }
        return Storage::disk('admin')->url($this->getAttributes()['thumbnail']);
    }
}
