<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\VersionHistory;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama',
        'username',
        'password',
        'email',
        'role',
        'foto_profile',
        'foto_kta',
        'alamat',
        'nomor_keanggotaan',
        'cabang',
        'tempat_lahir',
        'wilayah',
        'daerah',
        'tanggal_lahir',
        'jenis_kelamin',
    ];


    public function __construct(array $attributes = []) {
        parent::__construct($attributes);
        $this->fillable = env('IS_SEPARATION', false) ? 
        [
            'id',
            'nama',
            'username',
            'password',
            'email',
            'role',
            'foto_profile',
            'foto_kta',
            'alamat',
            'nomor_keanggotaan',
            'cabang',
            'tempat_lahir',
            'wilayah',
            'daerah',
            'tanggal_lahir',
            'jenis_kelamin',
        ] : 
        [
            'nama',
            'username',
            'password',
            'email',
            'role',
            'foto_profile',
            'foto_kta',
            'alamat',
            'nomor_keanggotaan',
            'cabang',
            'tempat_lahir',
            'wilayah',
            'daerah',
            'tanggal_lahir',
            'jenis_kelamin',
        ];
    }

    protected $table = 'users';

    protected $primaryKey = 'id';

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function kajians()
    {
        return $this->hasMany(Kajian::class, 'id_user'); // Sesuaikan 'user_id' dengan nama kolom foreign key di tabel 'kajian'
    }

    public function versions()
    {
        return $this->hasMany(VersionHistory::class, 'user_id');
    }

    public function isAdmin(): bool
    {
        return $this->role === 'admin';
    }

    public function isRegistered(): bool
    {
        return $this->role === 'registered';
    }

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
}
