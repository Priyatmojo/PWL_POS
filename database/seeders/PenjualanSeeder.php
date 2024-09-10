<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' => 1,
                'user_id' => 3,
                'pembeli' => 'Siti',
                'penjualan_kode' => 'A-1',
                'penjualan_tanggal' => '2024-10-09',
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 3,
                'pembeli' => 'Ahmad',
                'penjualan_kode' => 'A-2',
                'penjualan_tanggal' => '2024-10-09',
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 3,
                'pembeli' => 'Adun',
                'penjualan_kode' => 'A-3',
                'penjualan_tanggal' => '2024-10-09',
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 3,
                'pembeli' => 'Khotijah',
                'penjualan_kode' => 'A-4',
                'penjualan_tanggal' => '2024-10-09',
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 3,
                'pembeli' => 'Ndomblong',
                'penjualan_kode' => 'A-5',
                'penjualan_tanggal' => '2024-10-09',
            ],
            [
                'penjualan_id' => 6,
                'user_id' => 3,
                'pembeli' => 'Kirun',
                'penjualan_kode' => 'A-6',
                'penjualan_tanggal' => '2024-10-09',
            ],
            [
                'penjualan_id' => 7,
                'user_id' => 3,
                'pembeli' => 'Khalid',
                'penjualan_kode' => 'A-7',
                'penjualan_tanggal' => '2024-10-09',
            ],
            [
                'penjualan_id' => 8,
                'user_id' => 3,
                'pembeli' => 'Aldi',
                'penjualan_kode' => 'A-8',
                'penjualan_tanggal' => '2024-10-09',
            ],
            [
                'penjualan_id' => 9,
                'user_id' => 3,
                'pembeli' => 'Jamal',
                'penjualan_kode' => 'A-9',
                'penjualan_tanggal' => '2024-10-09',
            ],
            [
                'penjualan_id' => 10,
                'user_id' => 3,
                'pembeli' => 'Rapli',
                'penjualan_kode' => 'A-10',
                'penjualan_tanggal' => '2024-10-09',
            ],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
