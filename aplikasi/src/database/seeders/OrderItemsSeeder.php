<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class OrderItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('order_items')->insert([
            'id_order' => 1,  
            'id_produk' => 3, 
            'jumlah' => 2,    
            'harga' => 400000, //kursi
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('order_items')->insert([
            'id_order' => 2,  
            'id_produk' => 1, 
            'jumlah' => 1,   
            'harga' => 2300000, //lemari
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('order_items')->insert([
            'id_order' => 3,  
            'id_produk' => 2, 
            'jumlah' => 2,    
            'harga' => 1200000, //meja
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
