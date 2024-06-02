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
    
}
