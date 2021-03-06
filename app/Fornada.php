<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornada extends Model
{

    protected $dates = ['created_at', 'updated_at'];

    protected $fillable = ['data_inicio', 'data_fim', 'user_id'];

    public function user(){
        return $this->hasOne(User::class);
    }
}
