<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Penjualan_detailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $data = [];
            $id = 1;
            for ($i = 1; $i <= 10; $i++) { // Untuk setiap 10 transaksi
                for ($j = 1; $j <= 3; $j++) { // Input 3 barang per transaksi
                    $data[] = [
                        'detail_id' => $id++,
                        'penjualan_id' => $i,
                        'barang_id' => rand(1, 15),
                        'harga' => 10000,
                        'jumlah' => rand(1, 5),
                    ];
                }
            }
            DB::table('m_penjualan_detail')->insert($data);
    }
}
