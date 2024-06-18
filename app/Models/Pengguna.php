<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;

    protected $table = 'pengguna';
    protected $primaryKey = 'id_pengguna';
    protected $fillable = ['nama_lengkap', 'email', 'telepon', 'password', 'foto_profil', 'id_peran'];

    public function peran()
    {
        return $this->belongsTo(Peran::class, 'id_peran');
    }

    public function pekerjaan()
    {
        return $this->hasMany(Pekerjaan::class, 'id_pengguna');
    }
}
