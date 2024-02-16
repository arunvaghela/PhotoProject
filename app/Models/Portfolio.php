<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'first_name', 'last_name', 'home_img', 'slide_img', 'short_desc', 'is_active'];
}
