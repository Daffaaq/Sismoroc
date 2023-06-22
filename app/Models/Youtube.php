<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Youtube extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'youtube';
    protected $primaryKey = 'id';
    protected $fillable = [
        'Bersifat_Mendidik',
        'Menghibur',
        'Bersifat_Kreatif',
        'Mengandung_Kekerasan',
        'Mengandung_Kata-kata_Kasar',
        'Mengandung_Unsur_Pornografi',
        'Kualitas_Tayangan',
        'Ketersediaan_Opsi_Bahasa',
        'Durasi_Tayang',
        'Menambah_wawasan',
    ];
}
