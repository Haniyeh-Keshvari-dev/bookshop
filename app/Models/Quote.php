<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Quote extends Model
{
    public function authors(){
         return $this->belongsTo('App\Models\Author');
    }
}
