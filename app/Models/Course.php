<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'thumbnail', 'name', 'alias', 'short_desc', 'price', 'normal_price', 'content'];

    public function getThumbnailAttribute() {
        if (empty($this->getAttributes()['thumbnail'])) {
            return '/images/default_thumbnail.jpg';
        }
        return Storage::disk('admin')->url($this->getAttributes()['thumbnail']);
    }
}
