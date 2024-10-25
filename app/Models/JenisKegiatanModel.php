<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JenisKegiatan extends Model
{
    protected $fillable = [
        'nama', 'keterangan'
    ];

    // Relasi: Jenis kegiatan memiliki banyak kegiatan
    public function kegiatan()
    {
        return $this->hasMany(Kegiatan::class);
    }
}
