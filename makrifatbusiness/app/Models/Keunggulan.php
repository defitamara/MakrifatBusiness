<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keunggulan extends Model
{
    use HasFactory;

    protected $table = 'keunggulan';
    protected $primaryKey = 'id_keunggulan';
    protected $fillable = [
         '', 'judul', 'deskripsi', 'kompetensi_1', 'kompetensi_2', 'kompetensi_3', 'persentase_1', 'persentase_2', 'persentase_3', 'gambar',
    ];
}
