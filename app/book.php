<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Author;
class book extends Model
{
    public function Author()
    {
        return $this->belongsTo(Author::class);
    }
}
