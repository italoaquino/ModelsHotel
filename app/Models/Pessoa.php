<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;

    protected $fillable = [
        'endereco_id',
        'nome',
        'sexo',
        'rg',
        'cpf',
        'dataNasc',
    ];
    
    public function Endereco(){
        return $this->belongsTo('App/Models/Endereco');
    }

    public function Contato(){
        return $this->hasMany('App/Models/Contato');
    }

    public function Reserva(){
        return $this->belongsTo('App/Models/Reserva');
    } 
    
    public function Entrar(){
        return $this->belongsTo('App/Models/Entrar');
    }

}
