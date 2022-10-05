<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table = 'artikel';
    protected $primaryKey = 'id_artikel';
    protected $fillable = [
         '', 'id_ktg', 'judul', 'tanggal', 'penulis','gambar', 'isi',
    ];

    public function katArt(){
    	return $this->belongsTo(Kategori_Artikel::class);
    }

}
