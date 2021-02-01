<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Getintouch extends Model
{
    use HasFactory;

    protected $fillable = [
        'alamat', 'email', 'whatsupp', 'jamkerja'
    ];
}
