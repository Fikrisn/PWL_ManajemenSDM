<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AgendaKegiatan extends Model
{
    protected $fillable = [
        'kegiatan_id', 'waktu', 'tempat', 'bobot', 'dokumen', 'anggota_id', 'progres'
    ];

    // Relasi: Agenda dimiliki oleh satu kegiatan
    public function kegiatan()
    {
        return $this->belongsTo(Kegiatan::class);
    }

    // Relasi: Agenda dimiliki oleh satu anggota (user)
    public function anggota()
    {
        return $this->belongsTo(User::class, 'anggota_id');
    }
}
