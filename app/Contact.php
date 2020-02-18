<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['name', 'lastname', 'telephone', 'mail', 'message'];

    protected $table = 'contacts';
}
