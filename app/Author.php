<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Dress;

class Author extends Model
{
    public function dresses()
    {
    	return $this->hasMany(Dress::class);
    }
}
