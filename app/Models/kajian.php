<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kajian extends Model
{
    use HasFactory;
    protected $table = 'kajian';

    protected $primaryKey = 'id';
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

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user'); // Sesuaikan 'id_user' dengan nama kolom foreign key di tabel 'kajian'
    }
    public function versions()
    {
        return $this->hasMany(versionHistory::class, 'kajian_id');
    }

    // Di dalam model Kajian
    public function versionHistory()
    {
        return $this->hasOne(VersionHistory::class);
    }


}
