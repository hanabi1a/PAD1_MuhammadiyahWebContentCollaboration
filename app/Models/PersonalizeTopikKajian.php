<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalizeTopikKajian extends Model
{
    use HasFactory;

    protected $table = 'personalize_topik_kajian';

    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'topik_kajian_id',
    ];

    public function topikKajian()
    {
        return $this->belongsTo(TopikKajian::class, 'topik_kajian_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
