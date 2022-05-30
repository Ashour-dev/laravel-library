<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    public function Author()
    {
        return $this->belongsTo('App\Author');
    }
}
