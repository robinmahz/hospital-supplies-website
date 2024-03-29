<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'category_id', 'slug'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function enquiries()
    {
        return $this->hasMany(Enquiry::class);
    }
    public function productGalleries()
    {
        return $this->hasMany(ProductGallery::class);
    }
    public function getImageAttribute($value)
    {
        return Storage::disk('public')->url('products/' . $value);
    }
}
