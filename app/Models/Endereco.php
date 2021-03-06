<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    protected $fillable = [
        'uf',
        'bairro',
        'endereco',
        'complemento',
    ];

    public function Pessoa(){ 
        return $this->hasMany('App/Models/Pessoa');
    }

}
