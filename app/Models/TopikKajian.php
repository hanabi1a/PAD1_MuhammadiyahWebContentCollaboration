<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopikKajian extends Model
{
    use HasFactory;

    protected $table = 'topik_kajian';

    protected $primaryKey = 'id';

    protected $fillable = [
        'nama',
    ];
    
    public function kajians()
    {
        return $this->belongsToMany(Kajian::class, 'relasi_topik_kajian', 'topik_kajian_id', 'kajian_id');
    }

    public function topikKajianName()
    {
        return $this->hasMany(TopikKajian::class, 'topik_kajian_id');
    }

    public function relasiTopikKajians()
    {
        return $this->belongsToMany(RelasiTopikKajian::class, 'topik_kajian_id');
    }
}
