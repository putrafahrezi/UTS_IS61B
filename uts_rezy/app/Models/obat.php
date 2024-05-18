<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;

    // Tentukan primary key
    protected $primaryKey = 'id';

    // Tentukan bahwa primary key bukan auto-incrementing
    public $incrementing = false;

    // Tentukan tipe primary key
    protected $keyType = 'string';

    // Tentukan kolom yang dapat diisi
    protected $fillable = ['nisn', 'nama', 'tgl', 'alamat', 'jjg', 'hp'];
}
