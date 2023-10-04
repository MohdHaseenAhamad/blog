<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = "post";
    protected $fillable = [
        'cat_id',
        'title',
        'slug',
        'photo',
        'contents',
        'meta_title' ,
        'meta_description' ,
        'meta_keywords',
        'date_posted',
        'created_at',
    ];
}
