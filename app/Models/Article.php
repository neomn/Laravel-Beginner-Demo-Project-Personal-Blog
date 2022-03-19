<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
      'title',
      'content',
    ];

    public function categories(){
        return $this->$this->hasOne(Category::class);
    }
    public function tags(){
        return $this->hasMany(tag::class);
    }
}
