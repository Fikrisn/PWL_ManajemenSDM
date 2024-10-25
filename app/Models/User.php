<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'role_id'
    ];

    // Relasi: User memiliki banyak kegiatan sebagai anggota atau PIC
    public function kegiatan()
    {
        return $this->hasMany(Kegiatan::class, 'pic_id');
    }

    // Relasi: User bisa memiliki banyak agenda jika dia adalah anggota kegiatan
    public function agenda()
    {
        return $this->hasMany(AgendaKegiatan::class, 'anggota_id');
    }

    // Relasi: Notifikasi untuk setiap user
    public function notifikasi()
    {
        return $this->hasMany(Notifikasi::class);
    }

    // Relasi: Role pengguna (Admin, Pimpinan, Dosen PIC, Dosen Anggota)
    // public function role()
    // {
    //     return $this->belongsTo(Role::class);
    // }
}
