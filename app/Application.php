<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $table = 'applications';

    protected $fillable = [
    'user_id', 'category_id', 'name', 'image_url', 'description', 'price',
    ];

public function scopeName($query, $name)
{
    if (trim($name) != ""){
        $query->where('name', "LIKE", "%$name%");
    }
}

public function category() {
    return $this->belongsTo('App\Category');
}

public function User() {
    return $this->belongsTo('App\User');
}

}
