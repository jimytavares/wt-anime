<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class animes extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'id';
    protected $table = "animes";
    
    /*protected $attributes = [
        'image' => 'no-image.png',
    ];*/
    
    protected $casts = [
        'genero' => 'array'
    ];
    
    protected $fillable = [
        'nome',  
    ];
}
