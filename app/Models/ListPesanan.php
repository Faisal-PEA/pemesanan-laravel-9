<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListPesanan extends Model
{
    use HasFactory;
    protected $table = 'pemesanan';
    protected $fillable = [
        'fb',
        'namaasli',
        'alamat',
        'wa',
    ];
}
