<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $dates = ['published_at'];

    public function Category(){
        return $this->belongsTo(Category::class);
    }

    public function Tag(){
        return $this->belongsToMany(Tag::class);
    }
}
