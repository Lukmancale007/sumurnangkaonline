<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kamar extends Model
{
    use HasFactory;

    protected $fillable = ['nama_kamar', 'ketua_kamar_id'];

    public function ketuaKamar()
{
    return $this->belongsTo(Santri::class, 'ketua_kamar_id');
}

    public function santris()
    {
        return $this->hasMany(Santri::class);
    }
}
