<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{

    protected $dates = ['created_at', 'updated_at'];

    protected $fillable = ['nome'];

}
