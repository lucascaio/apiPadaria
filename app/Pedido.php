<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{

    protected $dates = ['created_at', 'updated_at'];

    public function pessoa(){
        return $this->hasOne(Pessoa::class);
    }
}
