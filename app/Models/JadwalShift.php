<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JadwalShift extends Model
{
    protected $table = 'jadwal_shift';
    protected $fillable = ['nmr', 'hari', 'shift'];
    public function umana()
    {
        return $this->belongsTo(Umana::class, 'nmr', 'nmr');
    }
}