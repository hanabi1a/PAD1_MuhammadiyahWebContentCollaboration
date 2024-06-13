<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kajian extends Model
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
        'slug',
        // tambahkan nama-nama atribut lain jika ada
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user'); // Sesuaikan 'id_user' dengan nama kolom foreign key di tabel 'kajian'
    }

    public function versions()
    {
        return $this->hasMany(VersionHistory::class, 'old_kajian_id');
    }

    public function current_versions()
    {
        return $this->hasOne(VersionHistory::class, 'kajian_id');
    }


    // Di dalam model Kajian
    public function versionHistory()
    {
        return $this->hasOne(VersionHistory::class);
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
