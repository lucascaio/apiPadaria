<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdutoPedido extends Model
{

    protected $dates = ['created_at', 'updated_at'];

    public function pedido(){
        return $this->hasMany(Pedido::class);
    }

    public function produto(){
        return $this->hasMany(Produto::class);
    }
}
