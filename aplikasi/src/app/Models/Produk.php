<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produks';
    protected $primaryKey = 'id_produk';

    protected $fillable = [
        'id_penjual',
        'nama',
        'deskripsi',
        'harga',
        'stok',
    ];

    //many to one pada model penjual
    public function penjuals()
    {
        return $this->belongsTo(Penjual::class, 'id_penjual');
    }

    //one to many pada orderItems
    public function orderItems()
    {
        return $this->hasMany(OrderItems::class, 'id_produk');
    }
}
