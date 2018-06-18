<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{

    protected $dates = ['created_at', 'updated_at'];

    protected $fillable = ['descricao', 'estoque', 'preco', 'quantidade', 'data_validade', 'data_fabricacao', 'peso', 'user_id', 'tipo_id'];

    public function user(){
        return $this->hasOne(User::class);
    }

    public function produto_tipo(){
        return $this->belongsTo(ProdutoTipo::class);
    }
}
