<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Penjual;

class PenjualSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Penjual::create([
            'nama' => 'Mabel AA1',
            'alamat' => 'Jakarta',
            'telepon' => '081234',
        ]);
    }
}
