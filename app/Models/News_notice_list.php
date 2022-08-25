<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News_notice_list extends Model
{
    use HasFactory;


    protected $fillable = [
        'title',
        'text',
        'image_small',
        'image_large',
        'status'
    ];


}
