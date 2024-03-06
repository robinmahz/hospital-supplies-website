<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $fillable = ['type'];

    public function productGallerys()
    {
        return $this->hasMany(ProductGallery::class);
    }
}
