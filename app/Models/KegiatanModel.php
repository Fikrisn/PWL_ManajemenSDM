<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $fillable = [
        'nama', 'tanggal_mulai', 'tanggal_selesai', 'beban_kerja', 'jenis_kegiatan_id', 'pic_id'
    ];

    // Relasi: Kegiatan dimiliki oleh satu jenis kegiatan
    public function jenisKegiatan()
    {
        return $this->belongsTo(JenisKegiatan::class);
    }

    // Relasi: Kegiatan memiliki satu PIC
    public function pic()
    {
        return $this->belongsTo(User::class, 'pic_id');
    }

    // Relasi: Kegiatan memiliki banyak anggota
    public function anggota()
    {
        return $this->belongsToMany(User::class, 'kegiatan_user', 'kegiatan_id', 'user_id');
    }

    // Relasi: Kegiatan memiliki banyak agenda
    public function agenda()
    {
        return $this->hasMany(AgendaKegiatan::class);
    }

    // Relasi: Kegiatan memiliki banyak surat tugas
    public function suratTugas()
    {
        return $this->hasMany(SuratTugas::class);
    }
}
