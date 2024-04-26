<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class parados extends Model
{
    use HasFactory;
    
    protected $PrimaryKey = 'id';
    protected $table = 'parados';
    
    protected $attributes = [
        'descricao' => 'vazio',
    ];
    
    public function nome_anime()
    {
        return $this->belongsTo(table_anime::class,'id_anime','id');
    }
}
