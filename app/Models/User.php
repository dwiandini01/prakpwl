<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    // Kalau kamu pakai tabel 'users' default Laravel, biarkan saja
    // Kalau pakai tabel lain (misalnya 'user'), tambahkan:
    // protected $table = 'user';

    protected $fillable = [
        'nama',   // ganti dari 'name' ke 'nama'
        'nim',
        'kelas_id', // simpan foreign key ke tabel kelas
    ];

    // Relasi ke tabel kelas
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }
}
