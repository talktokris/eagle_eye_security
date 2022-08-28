<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country_list extends Model
{
    use HasFactory;

    protected $fillable = [
        'country_lists',
        'status',

    ];
}
