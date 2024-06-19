<?php

namespace Database\Seeders;

use App\Models\Khodam;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class KhodamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $namaKhodams = [
            'Macan Putih', 'Garuda Kecil', 'Upil Singa', 'Kura-Kura Skizo', 'Koreng Basah',
            'Gerobag Ketoprak', 'Ular Kadut', 'Pentil Yanto', 'Tutut Kebon', 'Mursid Lejat dan Bergiji',
            'Kucing Pusing', 'Belut Galak', 'Semangka Berbulu', 'Jengkol Jenggo', 'Cumi Kering',
            'Kodok Kurap', 'Ayam Cabe', 'Kadal Manggung', 'Lintah Terbang', 'Kepiting Santuy',
            'Ikan Kancut', 'Harimau Pelor', 'Tikus Pensiun', 'Bebek Sembur', 'Kepompong Gaul',
            'Teri Teriak', 'Lele Liar', 'Gurame Galau', 'Bandeng Blangsak', 'Lobster Joget',
            'Badak Takut Air', 'Gajah Gosong', 'Bunglon Bling-Bling', 'Zebra Patah Hati', 'Jerapah Pingsan',
            'Kelelawar Ngantuk', 'Iguana Seribu', 'Ulat Kekenyangan', 'Merak Merem', 'Burung Gigit Jari',
            'Kupu-Kupu Alay', 'Serigala Sendu', 'Beruang Tersesat', 'Ikan Mujur', 'Udang Ambekan',
            'Katak Karaoke', 'Kuda Kawat', 'Rusa Menari', 'Babi Buta', 'Tikus Kantoran',
            'Anjing Gaul', 'Elang Terbang Tinggi', 'Kambing Keren', 'Bebek Joget', 'Kepiting Joget',
            'Kucing Kelelep', 'Tikus Nyolong', 'Harimau Loncat', 'Gajah Kuat', 'Ayam Kampus',
            'Biawak Galak', 'Tikus Matre', 'Kucing Garong', 'Kuda Laut', 'Ikan Teri',
            'Kambing Ngantuk', 'Sapi Berjanggut', 'Belalang Tempur', 'Lebah Madu', 'Kelinci Mungil',
            'Burung Gagak', 'Ular Piton', 'Buaya Darat', 'Harimau Besar', 'Serigala Palsu',
            'Jerapah Tinggi', 'Singa Padang', 'Beruang Madu', 'Burung Hantu', 'Kuda Lari',
            'Kelinci Berlari', 'Tikus Hitam', 'Bebek Putih', 'Ayam Kampung', 'Kucing Kecil',
            'Anjing Kecil', 'Singa Besar', 'Burung Kecil', 'Harimau Kecil', 'Beruang Kecil',
            'Buaya Besar', 'Kelinci Besar', 'Kuda Besar', 'Anjing Besar', 'Kucing Besar',
            'Bebek Kecil', 'Ayam Besar', 'Burung Besar', 'Harimau Hitam', 'Singa Hitam',
        ];

        for ($i = 0; $i < 1000; $i++) {
            Khodam::create([
                'nama_khodam' => $namaKhodams[array_rand($namaKhodams)],
            ]);
        }
    }
}
