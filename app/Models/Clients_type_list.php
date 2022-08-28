<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients_type_list extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_short',
        'full_name',
        'status'
    ];



    public function getAllClients(){

        return $this->hasMany(Clients_list::class, 'client_category', 'name_short');

    }
}