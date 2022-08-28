<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service_list extends Model
{
    use HasFactory;


    protected $fillable = [
        'link',
        'title',
        'content',
        'image_small',
        'image_mid',
        'image_large',
        'image_slider',
        'seo_title',
        'seo_keywords',
        'seo_description',
        'status',

    ];
}