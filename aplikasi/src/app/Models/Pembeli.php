<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    use HasFactory;
    protected $table = 'pembelis';
    protected $primaryKey = 'id_pembeli';

    protected $fillable = ['nama', 'email', 'alamat','telepon' ];
    //one to many ke order
    public function orders()
    {
        return $this->hasMany(Order::class, 'id_pembeli');
    }

}
