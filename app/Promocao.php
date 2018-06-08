<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promocao extends Model
{

    protected $dates = ['created_at', 'updated_at'];

    protected $fillable = ['tempo_vigente', 'desconto', 'produto_id'];

    public function produto(){
        return $this->hasOne(Produto::class);
    }
}
