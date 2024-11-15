<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;
use Carbon\Carbon;


class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Order::create([
            'id_pembeli' => 1, // Sesuaikan dengan id_pembeli yang ada di tabel pembeli
            'tanggal_order' => Carbon::now()->subDays(10),
        ]);

        Order::create([
            'id_pembeli' => 2,
            'tanggal_order' => Carbon::now()->subDays(5),
        ]);

        Order::create([
            'id_pembeli' => 3,
            'tanggal_order' => Carbon::now()->subDays(3),
        ]);
    }
}
