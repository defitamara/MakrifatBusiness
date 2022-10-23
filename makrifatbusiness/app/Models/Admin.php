<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $table = 'admin';
    protected $primaryKey = 'id_admin';
    protected $fillable = [
         'id_admin', 'name', 'foto', 'jenis_kelamin', 'id',
    ];

    public function user(){
    	return $this->hasMany(User::class);
    }

}
