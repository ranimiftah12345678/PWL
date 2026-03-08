<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
   public function index()
{
    /*$data = [
        'kategori_kode' => 'SNK',
        'kategori_nama' => 'Snack/Makanan Ringan',
        'created_at' => now(),
        'updated_at' => now()
    ];
    DB::table('m_kategori')->insert($data);
   
    $newData = DB::table('m_kategori')->where('kategori_kode', 'SNK')->first();
    return "Insert berhasil. Data baru: " . json_encode($newData);
    
    $row = DB::table('m_kategori')->where('kategori_kode', 'SMK')->update(['kategori_nama' => 'Camilan']);
    return 'Update data berhasil. Jumlah data yang diupdate: ' . $row . ' baris';
    
    $row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->delete();
    return 'Delete data berhasil. Jumlah data yang dihapus: ' . $row . ' baris';
    
    $data = DB::table('m_kategori')->get();
    return view('kategori', ['data' => $data]);
    */
    }
}
