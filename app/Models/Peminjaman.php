<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_peminjaman';

    protected $table = 'peminjaman_book';

    protected $fillable =
    [
        'peminjam_nama',
        'peminjam_email',
        'peminjam_nomorhp',
        'waktu_meminjam',
        'duration',
        'id_book'
    ];

    public function Books()
    {
        return $this->belongsTo(Book::class,'id_book');
    }
}
