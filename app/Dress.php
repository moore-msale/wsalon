<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Author;

class Dress extends Model
{
    public function author()
    {
    	return $this->belongsTo(Author::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
