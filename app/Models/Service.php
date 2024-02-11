<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'name', 'slider_img', 'desc_img', 'is_active', 'short_desc', 'long_desc'];
}
