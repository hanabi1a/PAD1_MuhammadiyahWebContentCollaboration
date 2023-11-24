<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kajian extends Model
{
    use HasFactory;
    protected $table = 'kajian';

    protected $fillable = [
        'judul_kajian',
        'pemateri',
        'lokasi_kajian',
        'id_user',
        'tanggal_postingan',
        'deskripsi_kajian',
        'foto_kajian',
        'file_kajian',
        // tambahkan nama-nama atribut lain jika ada
    ];
}
