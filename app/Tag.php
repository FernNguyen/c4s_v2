<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';
    public $timestamps = false;

    public function Article(){
        return $this->belongsToMany('App\Article');
    }

}
