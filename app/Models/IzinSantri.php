<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IzinSantri extends Model
{
    protected $table = 'izin_santris';
    protected $fillable = [
        'nis',
        'nama',
        'asrama',
        'kepalakamar',
        'tujuan',
        'berangkat',
        'kembali'];
}
