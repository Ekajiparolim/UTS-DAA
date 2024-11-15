<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders'; // Nama tabel di database
    protected $primaryKey = 'id_order'; // Primary key tabel

    protected $fillable = [
        'id_pembeli', // Foreign key ke Pembeli
        'tanggal_order',
    ];

    public function pembelis()
    {
        return $this->belongsTo(Pembeli::class, 'id_pembeli');
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItems::class, 'id_order');
    }


}
