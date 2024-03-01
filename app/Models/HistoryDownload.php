<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryDownload extends Model
{
    protected $table = 'history_downloads';

    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'kajian_id',
        'downloaded_at'
    ];

    // Definisikan relasi ke model User (jika diperlukan)
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Definisikan relasi ke model Kajian (jika diperlukan)
    public function kajian()
    {
        return $this->belongsTo(Kajian::class, 'kajian_id');
    }
}