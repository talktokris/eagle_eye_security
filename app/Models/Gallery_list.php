<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery_list extends Model
{
    use HasFactory;



    protected $fillable = [
        'galley_category',
        'galley_title',
        'image_small',
        'image_small',
        'status'
    ];
}