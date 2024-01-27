<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'category_id', 'name', 'slug',
        'meta_description', 'meta_keyword', 'short_description',
        'long_description', 'status'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function productGallery()
    {
        return $this->hasMany(ProductGallery::class);
    }
}
