<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['order_id', 'rating', 'content'];

    protected $table = 'comments';

    public function order() {
        return $this->belongsTo('App\Order');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function application() {
        return $this->belongsToMany('App\Application');  
    }

}



