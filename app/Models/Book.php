<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function publishers()
    {
        return $this->belongsToMany(Publisher::class);
    }
    public function category(){

        return $this->belongsTo(Category::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function authors()
    {
        return $this->belongsTo(Author::class);
    }
    public function orderitems(){
        return $this->hasMany(OrderItem::class);
    }
}
