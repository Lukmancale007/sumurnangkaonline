<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IzinUmana extends Model
{
    protected $table = 'izinumana'; // Nama tabel
    protected $fillable = ['nmr', 'tanggal','shift', 'keterangan'];

    public function umana()
    {
        return $this->belongsTo(Umana::class, 'nmr', 'nmr');
    }
}
