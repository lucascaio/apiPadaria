<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{

    protected $dates = ['created_at', 'updated_at'];

    protected $fillable = ['user_id', 'total_pago', 'total_receber'];

    public function user(){
        return $this->hasOne(User::class);
    }

    public function produto(){
        return $this->hasMany(Produto::class);
    }
}
