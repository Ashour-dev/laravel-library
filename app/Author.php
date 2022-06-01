<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\book;
class Author extends Model
{
    public function book()
    {
        return $this->hasMany(book::class);
    }
}
