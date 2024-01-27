<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductGallery extends Model
{
    use HasFactory;

    protected $table = 'product_galleries';

    protected $fillable =
    [
        'product_id', 'photo', 'status'
    ];

    // Define the relationship between ProductGallery and Product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function getPhotoAttribute($value)
    {
        return url('storage/' . $value);
    }
}
