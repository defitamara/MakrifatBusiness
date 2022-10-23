<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $table = 'banner';
    protected $primaryKey = 'id';
    protected $fillable = [
         '', 'judul_kecil', 'judul_besar', 'gambar',
    ];
}
