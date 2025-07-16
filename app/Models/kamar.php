<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo; // ✅ BENAR

class Kamar extends Model
{
    protected $fillable = ['nama_kamar', 'kepala_kamar_id'];

    public function kepalaKamar(): BelongsTo
    {
        return $this->belongsTo(KepalaKamar::class, 'kepala_kamar_id');

    }
}
