<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['name', 'lastname', 'phone', 'email', 'message'];

    protected $table = 'contacts';
}
