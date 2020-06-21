<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //JADI KITA MENGGUNAKAN QUERY BUILDER UNTUK MENJALANKAN QUERY YANG SUDAH ADA
        //DIMANA QUERY BUILDER ADALAH SALAH SATU FITUR YANG ADA DILARAVEL UNTUK BERINTERAKSI DENGAN DATABASE
        //ADAPUN QUERYNYA ADALAH SALINAN DARI PROJECT SAYA YANG LAINNYA
        DB::insert("INSERT INTO `provinces` (`id`, `name`, `created_at`, `updated_at`) VALUES
        (1, 'Bali', '2019-08-29 12:55:52', '2019-08-29 12:55:52'),
        (2, 'Bangka Belitung', '2019-08-29 12:55:52', '2019-08-29 12:55:52'),
        (3, 'Banten', '2019-08-29 12:55:52', '2019-08-29 12:55:52'),
        (4, 'Bengkulu', '2019-08-29 12:55:52', '2019-08-29 12:55:52'),
        (5, 'DI Yogyakarta', '2019-08-29 12:55:52', '2019-08-29 12:55:52'),
        (6, 'DKI Jakarta', '2019-08-29 12:55:52', '2019-08-29 12:55:52'),
        (7, 'Gorontalo', '2019-08-29 12:55:52', '2019-08-29 12:55:52'),
        (8, 'Jambi', '2019-08-29 12:55:52', '2019-08-29 12:55:52'),
        (9, 'Jawa Barat', '2019-08-29 12:55:52', '2019-08-29 12:55:52'),
        (10, 'Jawa Tengah', '2019-08-29 12:55:52', '2019-08-29 12:55:52'),
        (11, 'Jawa Timur', '2019-08-29 12:55:52', '2019-08-29 12:55:52'),
        (12, 'Kalimantan Barat', '2019-08-29 12:55:52', '2019-08-29 12:55:52'),
        (13, 'Kalimantan Selatan', '2019-08-29 12:55:52', '2019-08-29 12:55:52'),
        (14, 'Kalimantan Tengah', '2019-08-29 12:55:52', '2019-08-29 12:55:52'),
        (15, 'Kalimantan Timur', '2019-08-29 12:55:52', '2019-08-29 12:55:52'),
        (16, 'Kalimantan Utara', '2019-08-29 12:55:52', '2019-08-29 12:55:52'),
        (17, 'Kepulauan Riau', '2019-08-29 12:55:52', '2019-08-29 12:55:52'),
        (18, 'Lampung', '2019-08-29 12:55:52', '2019-08-29 12:55:52'),
        (19, 'Maluku', '2019-08-29 12:55:52', '2019-08-29 12:55:52'),
        (20, 'Maluku Utara', '2019-08-29 12:55:52', '2019-08-29 12:55:52'),
        (21, 'Nanggroe Aceh Darussalam (NAD)', '2019-08-29 12:55:52', '2019-08-29 12:55:52'),
        (22, 'Nusa Tenggara Barat (NTB)', '2019-08-29 12:55:52', '2019-08-29 12:55:52'),
        (23, 'Nusa Tenggara Timur (NTT)', '2019-08-29 12:55:52', '2019-08-29 12:55:52'),
        (24, 'Papua', '2019-08-29 12:55:52', '2019-08-29 12:55:52'),
        (25, 'Papua Barat', '2019-08-29 12:55:52', '2019-08-29 12:55:52'),
        (26, 'Riau', '2019-08-29 12:55:52', '2019-08-29 12:55:52'),
        (27, 'Sulawesi Barat', '2019-08-29 12:55:52', '2019-08-29 12:55:52'),
        (28, 'Sulawesi Selatan', '2019-08-29 12:55:52', '2019-08-29 12:55:52'),
        (29, 'Sulawesi Tengah', '2019-08-29 12:55:52', '2019-08-29 12:55:52'),
        (30, 'Sulawesi Tenggara', '2019-08-29 12:55:52', '2019-08-29 12:55:52'),
        (31, 'Sulawesi Utara', '2019-08-29 12:55:52', '2019-08-29 12:55:52'),
        (32, 'Sumatera Barat', '2019-08-29 12:55:52', '2019-08-29 12:55:52'),
        (33, 'Sumatera Selatan', '2019-08-29 12:55:52', '2019-08-29 12:55:52'),
        (34, 'Sumatera Utara', '2019-08-29 12:55:52', '2019-08-29 12:55:52');");
    }
}
