<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostView extends Model
{
    protected $table = 'post_views';

    public function post()
    {
        return $this->belongsTo('App\Post');
    }


}
