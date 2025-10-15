<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'kelas';
    protected $fillable = ['nama_kelas'];

    // Relasi ke tabel user
    public function users()
    {
        return $this->hasMany(UserModel::class, 'kelas_id');
    }

    // Ambil semua data kelas
    public function getKelas()
    {
        return $this->all();
    }
}
