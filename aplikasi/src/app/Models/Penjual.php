<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjual extends Model
{
    use HasFactory;
    protected $table = 'penjuals';
    protected $primariKey = 'id_penjual';

    protected $fillable = ['nama', 'alamat','telepon' ];
    //one to many ke produk
    public function produks()
    {
        return $this->hasMany(Produk::class, 'id_penjual');
    }
}
