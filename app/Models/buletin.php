<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class buletin extends Model
{
   protected $fillable=[
    'edisi',
    'tema',
    'pdf',
   ];
}
