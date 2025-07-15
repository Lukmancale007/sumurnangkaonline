<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class umana extends Model
{
    use HasFactory;

    protected $table = 'umana'; // Nama tabel
    protected $fillable = ['nmr', 'nama', 'jabatan','nomor_wa']; // Kolom yang bisa diisi


}

