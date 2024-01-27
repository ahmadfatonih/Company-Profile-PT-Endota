<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['address', 'email', 'phone', 'whatsapp', 'link_twitter', 'link_facebook', 'link_instagram', 'link_maps'];

}
