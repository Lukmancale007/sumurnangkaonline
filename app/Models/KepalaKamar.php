<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class KepalaKamar extends Authenticatable
{
    protected $fillable = [
        'username',
        'password',
        'kamar_id',
    ];

    protected $hidden = [
        'password',
    ];
}
