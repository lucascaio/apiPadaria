<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Pessoa extends Model
{

    protected $dates = ['created_at', 'updated_at'];

    protected $fillable = ['nome', 'email', 'senha'];

    public function perfil()
{
    return $this->hasOne(Perfil::class);
}


}
