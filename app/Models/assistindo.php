<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class assistindo extends Model
{
    use HasFactory;
    
    protected $table = "assistindo";
    protected $guarded = [];
    
    public function nome_anime()
    {
        return $this->belongsTo(animes::class,'id_anime','id');
    }
}
