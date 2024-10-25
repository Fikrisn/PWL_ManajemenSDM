<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StatistikBebanKerja extends Model
{
    protected $fillable = [
        'user_id', 'beban_kerja_ringan', 'beban_kerja_sedang', 'beban_kerja_tinggi'
    ];

    // Relasi: Statistik dimiliki oleh satu user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
