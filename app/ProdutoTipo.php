<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdutoTipo extends Model
{

    protected $table = "tipos";

    protected $dates = ['created_at', 'updated_at'];

    protected $fillable = ['nome'];

}
