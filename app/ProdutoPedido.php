<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdutoPedido extends Model
{

    protected $dates = ['created_at', 'updated_at'];

    protected $fillable = ['pedido_id', 'produto_id', 'quantidade', 'preco_total', 'preco_unidade'];


    public function pedido(){
        return $this->hasMany(Pedido::class);
    }

    public function produto(){
        return $this->hasMany(Produto::class);
    }
}
