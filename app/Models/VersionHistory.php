<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VersionHistory extends Model
{
    use HasFactory;

    protected $table = 'version_history';

    protected $primaryKey = 'id';

    protected $fillable = [
        'kajian_id', // ID kajian yang terhubung
        'old_kajian_id', // ID kajian sebelumnya, jika ada
        'user_id',   // ID pengguna yang mengunggah versi
        'version_number', // Nomor versi
        'file_path',  // Path ke file kajian
        'commit_message',
        // tambahkan kolom lain jika diperlukan
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($versionHistory) {
            $latestVersion = static::where('kajian_id', $versionHistory->kajian_id)
                ->max('version_number');

            $versionHistory->version_number = $latestVersion ? $latestVersion + 1 : 1;
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Definisikan relasi ke model Kajian jika diperlukan
    public function kajian()
    {
        return $this->belongsTo(Kajian::class, 'kajian_id');
    }

    public function oldKajian()
    {
        return $this->belongsTo(Kajian::class, 'old_kajian_id');
    }
}
