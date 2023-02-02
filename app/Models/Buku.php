<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'bukus';
    protected $primaryKey = 'id';

    protected $fillable = [
        'JudulBuku','Descripsi','Kategori','Keywords', 'Harga', 'Stok', 'Penerbit'
    ];
}
