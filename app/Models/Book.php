<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'deskripsi',
        'kategori',
        'jumlah',
        'filebuku',
        'gambar',
    ];

    protected $casts = [
        'jumlah' => 'integer',
    ];
}
