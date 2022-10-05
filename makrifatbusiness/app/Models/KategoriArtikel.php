<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriArtikel extends Model
{
    use HasFactory;

    protected $table = 'kategori_artikel';
    protected $primaryKey = 'id_ktg';
    protected $fillable = [
         'id_ktg', 'kategori_artikel',
    ];

    public function artikel(){
    	return $this->hasMany(Artikel::class);
    }

}
