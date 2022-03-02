<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tamu extends Model
{
    protected $table = 'tamu';
    public $timestamps = true;

    protected $fillable = [
        'tanggal',
        'waktu',
        'nama',
        'keperluan'
    ];

}
