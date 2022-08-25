<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery_type_list extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_short',
        'full_name',
        'status'
    ];

}