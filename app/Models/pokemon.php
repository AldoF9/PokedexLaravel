<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pokemon extends Model
{
    //use HasFactory;
    protected $table ="pokemon2";
    protected $primaryKey="id_pokemon";
    protected $fillable =[
        'nombre_pokemon', 'talla_pokemon'
    ];
}
