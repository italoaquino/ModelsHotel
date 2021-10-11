<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $fillable = [
        'pessoa_id',
        'valor_total',
        'tempo_reserva',
    ];

    public function Pessoa(){
        return $this->belongsTo('App/Models/Pessoa');
    }

    public function Quarto(){
        return $this->hasMany('App/Models/Quarto');
    }

}
