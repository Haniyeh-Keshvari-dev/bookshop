<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Quote extends Model
{
    public function author(){
         return $this->belongsTo(Author::class);
    }
}
