<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // untuk membuat variable yang bisa diisi sisanya tidak boleh
    // protected $fillable = ['title', 'excerpt', 'body'];

    // untuk membuat variable kecuali ini tidak bisa
    protected $guarded = ['id'];

    protected $with = ['category', 'author'];

    // keduanya bisa

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
