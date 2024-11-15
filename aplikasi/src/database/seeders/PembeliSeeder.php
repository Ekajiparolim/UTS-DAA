<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pembeli;

class PembeliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Pembeli::create([
            'nama' => 'alvin',
            'email' => 'alvin@eadmin.com',
            'alamat' => 'Surabaya',
            'telepon' => '0908',
        ]);

        Pembeli::create([
            'nama' => 'ilham',
            'email' => 'ilham@admin.com',
            'alamat' => 'Bandung',
            'telepon' => '0706',
        ]);

        Pembeli::create([
            'nama' => 'kevin',
            'email' => 'kevin@admin.com',
            'alamat' => 'Jakarta',
            'telepon' => '0504',
        ]);
    }
}
