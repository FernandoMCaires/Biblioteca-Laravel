<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'numOfPages', 'author_id'];

    public function Author(){
        return $this->belongsTo(Author::class);
    }

    public function Tags(){
        return $this->belongsToMany(Tag::class);
    }
}
