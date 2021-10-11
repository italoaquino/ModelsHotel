<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    use HasFactory;

    protected $fillable = [
        'pessoa_id',
        'tipo',
        'celular',
        'email',
    ];

    public function Pessoa(){
        return $this->belongsTo('App/Models/Pessoa');
    }

}
