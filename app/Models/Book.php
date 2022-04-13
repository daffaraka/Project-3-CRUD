<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
  

    protected $fillable = 
    [
        'book_name',
        'book_pages',
        'book_author',
        'book_color',
        'id_category'
    ];

    public function Category()
    {
        return $this->belongsTo(Category::class,'id_category');
    }

    public function Peminjaman()
    {
        return $this->hasMany(Peminjaman::class,'id_peminjaman');
    }
}
