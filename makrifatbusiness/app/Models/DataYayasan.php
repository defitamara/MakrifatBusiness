<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataYayasan extends Model
{
    use HasFactory;

    protected $table = 'data_yayasan';
    protected $primaryKey = 'id';
    protected $fillable = [
         '', 'judul', 'jumlah',
    ];
}
