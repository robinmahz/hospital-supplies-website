<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'parent_id', 'image', 'slug',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function parent()
    {
        return $this->belongsTo(Category::class);
    }

    public function getImageAttribute($value)
    {
        return Storage::disk("public")->url('categories/' . $value);
    }
}
