<?php

namespace App\Models;

use Spatie\ModelStatus\HasStatuses;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Santri extends Model
{
    use HasFactory;
    use HasStatuses;
    protected $table = 'santris';
    protected $fillable = [
    'nis',
    'image',
    'nama',
    'tanggal_lahir',
    'gender',
    'kamar_id',
    'alamat',
    'ayah',
    'ibu'];
    public static function boot()
    { parent::boot();
        static::creating(function ($santri) {
            $prefix = $santri->gender === 'putra' ? '202001' : '202002';
            $lastSantri = static::where('gender', $santri->gender)->orderBy('nis', 'desc')->first();
            $lastNumber = $lastSantri ? intval(substr($lastSantri->nis, 6)) : 0;

            do {
                $newNis = $prefix . str_pad($lastNumber + 1, 4, '0', STR_PAD_LEFT);
                $lastNumber++;
            } while (Santri::where('nis', $newNis)->exists());

            $santri->nis = $newNis;
        });
    }
     public function kamar()
    {
        return $this->belongsTo(Kamar::class);
    }
}
