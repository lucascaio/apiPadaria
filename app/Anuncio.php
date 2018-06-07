<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anuncio extends Model
{
    protected $dates = ['created_at', 'updated_at'];

    protected $fillable = ['titulo', 'descricao', 'data_inicio', 'data_fim'];

    public function produtos(){
        return $this->hasMany(Produto::class);
    }
}
