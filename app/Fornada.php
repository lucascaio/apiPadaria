<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornada extends Model
{

    protected $dates = ['created_at', 'updated_at'];

    protected $fillable = ['data_inicio', 'data_fim', 'pessoa_id'];

    public function pessoa(){
        return $this->hasOne(Pessoa::class);
    }
}
