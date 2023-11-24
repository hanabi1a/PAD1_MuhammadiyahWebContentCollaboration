<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class historylogin extends Model
    {
        protected $table = 'history_login'; // Nama tabel yang sesuai

        public function user()
        {
            return $this->belongsTo(User::class, 'user_id', 'id');
        }
        protected $fillable = [
            'user_id', 'timestamp', 'user_agent',
            // Kolom-kolom yang bisa diisi secara massal (mass assignable)
        ];

        // Relasi ke model User jika diperlukan
    }
