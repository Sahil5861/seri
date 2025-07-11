<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogComment extends Model
{
    protected $table = 'blog_comments';
    protected $fillable = ['blog_id', 'comment'];

    public function blog(){
        return $this->belongsto(Blog::class);
    }
}
