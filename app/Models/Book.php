<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Author;

class Book extends Model
{
    public function publishers()
    {
        return $this->belongsToMany(Publisher::class);
    }
    public function category(){

        return $this->belongsTo(Category::class);
    }

    public function review()
    {
        return $this->hasMany(Review::class);
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
    public function orderitems(){
        return $this->hasMany(OrderItem::class);
    }
}
