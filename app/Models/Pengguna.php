<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;

    protected $table = 'pengguna';
    protected $primaryKey = 'id_pengguna';
    protected $fillable = ['nama_lengkap', 'email', 'telepon', 'kata_sandi', 'foto_profil', 'id_peran'];

    public function peran()
    {
        return $this->belongsTo(Peran::class, 'id_peran');
    }
    public static function hitungTotalPengguna()
    {
        return self::count();
    }
}

