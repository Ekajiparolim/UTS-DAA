<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Produk;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Produk::create([
            'id_penjual' =>1,
            'nama' => 'Lemari',
            'deskripsi' => 'Dengan kayu berkualitas, membuat lemari tahan lama',
            'harga' => 2300000,
            'stok' => 7,

        ]);

        Produk::create([
            'id_penjual' =>1,
            'nama' => 'Meja',
            'deskripsi' => 'dengan tampilan yang simpek dan elegan membuat rumah menjadilebih mewah',
            'harga' => 1200000,
            'stok' => 12,

        ]);

        Produk::create([
            'id_penjual' =>1,
            'nama' => 'kursi',
            'deskripsi' => 'Terbuat dari kayu jati yang terbukti kuat dan mewah',
            'harga' => 400000,
            'stok' => 20,

        ]);


    }
}
