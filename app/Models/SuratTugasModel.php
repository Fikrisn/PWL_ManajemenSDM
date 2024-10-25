<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuratTugas extends Model
{
    protected $fillable = [
        'kegiatan_id', 'nama_file', 'tanggal_upload'
    ];

    // Relasi: Surat Tugas dimiliki oleh satu kegiatan
    public function kegiatan()
    {
        return $this->belongsTo(Kegiatan::class);
    }
}
