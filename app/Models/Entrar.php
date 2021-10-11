<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrar extends Model
{
    use HasFactory;

    protected $fillable = [
        'pessoa_id',
        'login',
        'senha',
    ];

    public function Pessoa(){
        return $this->belongsTo('App/Models/Pessoa');
    }
    
    
    

}
