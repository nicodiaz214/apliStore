<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id', 'application_id', 'price'];

    protected $table = 'orders';

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function application() {
        return $this->belongsToMany('App\Application');  
    }

    public function comment() {
        return $this->hasOne('App\Comment');  
    }

}
