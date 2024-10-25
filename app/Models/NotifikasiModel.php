<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notifikasi extends Model
{
    protected $fillable = [
        'user_id', 'judul', 'pesan', 'status'
    ];

    // Relasi: Notifikasi dimiliki oleh satu user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
