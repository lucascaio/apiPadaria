<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $dates = ['created_at', 'updated_at', 'birthdate'];

    protected $fillable = ['name', 'gender', 'email', 'birthdate'];

}
