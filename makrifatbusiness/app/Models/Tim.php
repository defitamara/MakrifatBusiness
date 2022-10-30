<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tim extends Model
{
    use HasFactory;

    protected $table = 'tim';
    protected $primaryKey = 'id';
    protected $fillable = [
         '', 'nama', 'jabatan', 'foto', 'link_facebook', 'link_twitter', 'link_instagram',
    ];
}
