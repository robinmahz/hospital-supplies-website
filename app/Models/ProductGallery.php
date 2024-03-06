<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class ProductGallery extends Model
{
    use HasFactory;
    protected $fillable = ['image', 'product_id', 'gallery_id'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function gallery()
    {
        return $this->belongsTo(Gallery::class);
    }
    public function getImageAttribute($value)
    {
        return Storage::disk('public')->url('products/' . $value);
    }
}
