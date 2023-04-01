<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'kategori' => 'Hair Treatment',
            'id_kategori' => 'HRT001',
            'id_layanan' => 'HHRT010000001',
            'nama_layanan' => 'Hair Cut',
            'harga' => 'Rp 100.000'
        ]);
        DB::table('products')->insert([
            'kategori' => 'Nail Treatment',
            'id_kategori' => 'HRT001',
            'id_layanan' => 'HHRT010000001',
            'nama_layanan' => 'Hair Cut',
            'harga' => 'Rp 100.000'
        ]);
    }
}
