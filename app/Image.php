<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';

    public $timestamps = false;

    public function articles(){
        return $this->belongsTo('App\Article');
    }
}
