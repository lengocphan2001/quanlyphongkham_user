<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'parent_id', 'slug', 'name'];

    public function parent() {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function children() {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function posts() {
        return $this->belongsToMany(Post::class);
    }

    public function childrenRecursive() {
        //$categories = Category::with('childrenRecursive')->whereNull('parent_id')->get();
        return $this->children()->with('childrenRecursive');
    }

    protected static function boot()
    {
        parent::boot(); // TODO: Change the autogenerated stub

        static::creating(function (Category $item) {
            $item->slug = toSlug($item->name);
        });
    }
}
