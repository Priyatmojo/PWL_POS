<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
     /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $data= 
      [
        //Supplier 1
        [
          'barang_id' => 1,
          'kategori_id' => 1,
          'barang_kode' => 'BLN',
          'barang_nama' => 'Bolpoin',
          'harga_beli' => 1500,
          'harga_jual' => 2000,
        ],
        [
          'barang_id' => 2,
          'kategori_id' => 1,
          'barang_kode' => 'BK',
          'barang_nama' => 'Buku',
          'harga_beli' => 8000,
          'harga_jual' => 10000,
        ],
        [
          'barang_id' => 3,
          'kategori_id' => 1,
          'barang_kode' => 'PNS',
          'barang_nama' => 'Pensil',
          'harga_beli' => 1500,
          'harga_jual' => 2000,
        ],
        [
          'barang_id' => 4,
          'kategori_id' => 1,
          'barang_kode' => 'SPD',
          'barang_nama' => 'Spidol',
          'harga_beli' => 5000,
          'harga_jual' => 7000,
        ],
        [
          'barang_id' => 5,
          'kategori_id' => 1,
          'barang_kode' => 'PHS',
          'barang_nama' => 'Penghapus',
          'harga_beli' => 1000,
          'harga_jual' => 2000,
        ],
        // Supplier 2
        [
          'barang_id' => 6,
          'kategori_id' => 2,
          'barang_kode' => 'HP',
          'barang_nama' => 'Hand Phone',
          'harga_beli' => 2000000,
          'harga_jual' => 3000000,
        ],
        [
          'barang_id' => 7,
          'kategori_id' => 2,
          'barang_kode' => 'TV',
          'barang_nama' => 'Televisi',
          'harga_beli' => 5000000,
          'harga_jual' => 8000000,
        ],
        [
          'barang_id' => 8,
          'kategori_id' => 2,
          'barang_kode' => 'AC',
          'barang_nama' => 'Air Conditioning',
          'harga_beli' => 8000000,
          'harga_jual' => 10000000,
        ],
        [
          'barang_id' => 9,
          'kategori_id' => 2,
          'barang_kode' => 'MTR',
          'barang_nama' => 'Monitor',
          'harga_beli' => 8000000,
          'harga_jual' => 10000000,
        ],
        [
          'barang_id' => 10,
          'kategori_id' => 2,
          'barang_kode' => 'LMP',
          'barang_nama' => 'Lampu',
          'harga_beli' => 15000,
          'harga_jual' => 20000,
        ],
        // Supplier 3
        [
          'barang_id' => 11,
          'kategori_id' => 3,
          'barang_kode' => 'KMP',
          'barang_nama' => 'Kompor',
          'harga_beli' => 100000,
          'harga_jual' => 150000,
        ],
        [
          'barang_id' => 12,
          'kategori_id' => 3,
          'barang_kode' => 'WJN',
          'barang_nama' => 'Wajan',
          'harga_beli' => 200000,
          'harga_jual' => 250000,
        ],
        [
          'barang_id' => 13,
          'kategori_id' => 3,
          'barang_kode' => 'SPT',
          'barang_nama' => 'Spatula',
          'harga_beli' => 20000,
          'harga_jual' => 25000,
        ],
        [
          'barang_id' => 14,
          'kategori_id' => 3,
          'barang_kode' => 'PNC',
          'barang_nama' => 'Panci',
          'harga_beli' => 200000,
          'harga_jual' => 250000,
        ],
        [
          'barang_id' => 15,
          'kategori_id' => 3,
          'barang_kode' => 'SP',
          'barang_nama' => 'Sapu',
          'harga_beli' => 50000,
          'harga_jual' => 60000,
        ],
      ];
      DB::table('m_barang')->insert($data);
    }
}
