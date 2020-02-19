<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $table = 'applications';

    protected $fillable = [
    'user_id', 'category_id', 'name', 'image_url', 'descripction', 'price',
    ];
}
