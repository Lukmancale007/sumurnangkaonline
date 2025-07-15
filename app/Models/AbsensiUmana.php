<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AbsensiUmana extends Model
{
    use HasFactory;
    protected $table = 'absensiumana';
    protected $fillable = ['nmr', 'tanggal', 'shift', 'waktu'   ]; // ini penting!

    public function umana()
    {
    return $this->belongsTo(Umana::class, 'nmr', 'nmr');
    }
}
