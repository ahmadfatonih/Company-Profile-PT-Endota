<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';

    protected $fillable = ['company', 'department', 'testimonial', 'logo_company', 'status'];

    public function getPhotoAttribute($value)
    {
        return url('storage/' . $value);
    }
}
