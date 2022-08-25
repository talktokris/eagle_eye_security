<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients_list extends Model
{
    use HasFactory;



    protected $fillable = [
        'client_category',
        'client_name',
        'client_logo_image',
        'status'
    ];
}
