<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['supplier_id' => 1, 'supplier_kode' => 'SJP', 'supplier_nama' => 'PT. Sumber Jaya', 'supplier_alamat' => 'Surabaya'],
            ['supplier_id' => 2, 'supplier_kode' => 'MRA', 'supplier_nama' => 'CV. Makmur Raya', 'supplier_alamat' => 'Malang'],
            ['supplier_id' => 3, 'supplier_kode' => 'GLX', 'supplier_nama' => 'PT. Galaxy Distribusi', 'supplier_alamat' => 'Jakarta'],
        ];
        DB::table('m_supplier')->insert($data);
    }
}
