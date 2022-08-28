<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobs_apply_list extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'email',
        'phone',
        'sex',
        'nationality',
        'height',
        'weight',
        'country_live_in',
        'education',
        'tranings',
        'skills',
        'languages',
        'experince_post',
        'experince_year',
        'status',
    ];


}