<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelasiTopikKajian extends Model
{
    use HasFactory;

    protected $table = 'relasi_topik_kajian';

    protected $primaryKey = 'id';

    protected $fillable = [
        'kajian_id',
        'topik_kajian_id',
    ];

    public function topikKajian()
    {
        return $this->belongsTo(TopikKajian::class, 'topik_kajian_id', 'id');
    }

    public function kajian()
    {
        return $this->belongsTo(Kajian::class, 'kajian_id', 'id');
    }
}
