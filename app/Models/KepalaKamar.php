<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class KepalaKamar extends Authenticatable
{
    protected $fillable = ['nama', 'username', 'password', 'kamar_id'];
    protected $hidden = [
        'password',       // Supaya password tidak ikut tampil saat model di-dump atau API
    ];
    public function kamar(): BelongsTo
    {
        return $this->belongsTo(Kamar::class, 'kamar_id');

    }
}