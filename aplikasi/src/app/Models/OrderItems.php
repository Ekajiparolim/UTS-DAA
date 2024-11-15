<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
    use HasFactory;

    protected $table = 'orderItems'; // Nama tabel di database
    protected $primaryKey = 'id_orderItems'; // Primary key tabel

    protected $fillable = [
        'id_order', // Foreign key ke order
        'id_produk', // foreign key ke produk
        'jumlah',
        'harga',
    ];

    public function orders()
    {
        return $this->belongsTo(Order::class, 'id_order');
    }

    public function produks()
    {
        return $this->belongsTo(Produk::class, 'id_produk');
    }

}
