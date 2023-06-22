<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class YoutubeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('youtube')->insert([
            //1
            [
                'nama' => 'Adit sopo jarwo',
                'Bersifat_Mendidik' => 5,
                'Menghibur' => 5,
                'Bersifat_Kreatif' => 4,
                'Mengandung_Kekerasan' => 5,
                'Mengandung_Kata-kata_Kasar' => 4,
                'Mengandung_Unsur_Pornografi' => 1,
                'Kualitas_Tayangan' => 5,
                'Ketersediaan_Opsi_Bahasa' => 5,
                'Durasi_Tayang' => 5,
                'Menambah_wawasan' => 4,
            ],
            //2
            [
                'nama' => 'Upin & Ipin',
                'Bersifat_Mendidik' => 5,
                'Menghibur' => 5,
                'Bersifat_Kreatif' => 4,
                'Mengandung_Kekerasan' => 5,
                'Mengandung_Kata-kata_Kasar' => 5,
                'Mengandung_Unsur_Pornografi' => 4,
                'Kualitas_Tayangan' => 5,
                'Ketersediaan_Opsi_Bahasa' => 4,
                'Durasi_Tayang' => 3,
                'Menambah_wawasan' => 5,
            ],
            //3
            [
                'nama' => 'Teletubies',
                'Bersifat_Mendidik' => 4,
                'Menghibur' => 4,
                'Bersifat_Kreatif' => 4,
                'Mengandung_Kekerasan' => 4,
                'Mengandung_Kata-kata_Kasar' => 5,
                'Mengandung_Unsur_Pornografi' => 5,
                'Kualitas_Tayangan' => 4,
                'Ketersediaan_Opsi_Bahasa' => 4,
                'Durasi_Tayang' => 3,
                'Menambah_wawasan' => 5,
            ],
            //4
            [
                'nama' => 'Masha and the Bear',
                'Bersifat_Mendidik' => 5,
                'Menghibur' => 5,
                'Bersifat_Kreatif' => 2,
                'Mengandung_Kekerasan' => 4,
                'Mengandung_Kata-kata_Kasar' => 2,
                'Mengandung_Unsur_Pornografi' => 5,
                'Kualitas_Tayangan' => 5,
                'Ketersediaan_Opsi_Bahasa' => 3,
                'Durasi_Tayang' => 5,
                'Menambah_wawasan' => 5,
            ],
            //5
            [
                'nama' => 'Laptop Si Unyil',
                'Bersifat_Mendidik' => 4,
                'Menghibur' => 5,
                'Bersifat_Kreatif' => 5,
                'Mengandung_Kekerasan' => 5,
                'Mengandung_Kata-kata_Kasar' => 4,
                'Mengandung_Unsur_Pornografi' => 5,
                'Kualitas_Tayangan' => 5,
                'Ketersediaan_Opsi_Bahasa' => 5,
                'Durasi_Tayang' => 5,
                'Menambah_wawasan' => 5,
            ],
            #6
            [
                'nama' => 'The Boss Baby',
                'Bersifat_Mendidik' => 5,
                'Menghibur' => 1,
                'Bersifat_Kreatif' => 3,
                'Mengandung_Kekerasan' => 1,
                'Mengandung_Kata-kata_Kasar' => 3,
                'Mengandung_Unsur_Pornografi' => 3,
                'Kualitas_Tayangan' => 5,
                'Ketersediaan_Opsi_Bahasa' => 2,
                'Durasi_Tayang' => 4,
                'Menambah_wawasan' => 5,
            ],
            #7
            [
                'nama' => '',
                'Bersifat_Mendidik' => 4,
                'Menghibur' => 1,
                'Bersifat_Kreatif' => 2,
                'Mengandung_Kekerasan' => 3,
                'Mengandung_Kata-kata_Kasar' => 4,
                'Mengandung_Unsur_Pornografi' => 4,
                'Kualitas_Tayangan' => 3,
                'Ketersediaan_Opsi_Bahasa' => 3,
                'Durasi_Tayang' => 5,
                'Menambah_wawasan' => 1,
            ],
            [
                'nama' => '',
                'Bersifat_Mendidik' => 4,
                'Menghibur' => 1,
                'Bersifat_Kreatif' => 2,
                'Mengandung_Kekerasan' => 3,
                'Mengandung_Kata-kata_Kasar' => 4,
                'Mengandung_Unsur_Pornografi' => 4,
                'Kualitas_Tayangan' => 3,
                'Ketersediaan_Opsi_Bahasa' => 3,
                'Durasi_Tayang' => 5,
                'Menambah_wawasan' => 1,
            ],
            [
                'nama' => 'Adit sopo jarwo',
                'Bersifat_Mendidik' => 4,
                'Menghibur' => 1,
                'Bersifat_Kreatif' => 2,
                'Mengandung_Kekerasan' => 3,
                'Mengandung_Kata-kata_Kasar' => 4,
                'Mengandung_Unsur_Pornografi' => 4,
                'Kualitas_Tayangan' => 3,
                'Ketersediaan_Opsi_Bahasa' => 3,
                'Durasi_Tayang' => 5,
                'Menambah_wawasan' => 1,
            ],
            [
                'nama' => 'Adit sopo jarwo',
                'Bersifat_Mendidik' => 4,
                'Menghibur' => 1,
                'Bersifat_Kreatif' => 2,
                'Mengandung_Kekerasan' => 3,
                'Mengandung_Kata-kata_Kasar' => 4,
                'Mengandung_Unsur_Pornografi' => 4,
                'Kualitas_Tayangan' => 3,
                'Ketersediaan_Opsi_Bahasa' => 3,
                'Durasi_Tayang' => 5,
                'Menambah_wawasan' => 1,
            ],
            [
                'nama' => 'Adit sopo jarwo',
                'Bersifat_Mendidik' => 4,
                'Menghibur' => 1,
                'Bersifat_Kreatif' => 2,
                'Mengandung_Kekerasan' => 3,
                'Mengandung_Kata-kata_Kasar' => 4,
                'Mengandung_Unsur_Pornografi' => 4,
                'Kualitas_Tayangan' => 3,
                'Ketersediaan_Opsi_Bahasa' => 3,
                'Durasi_Tayang' => 5,
                'Menambah_wawasan' => 1,
            ],
            [
                'nama' => 'Adit sopo jarwo',
                'Bersifat_Mendidik' => 4,
                'Menghibur' => 1,
                'Bersifat_Kreatif' => 2,
                'Mengandung_Kekerasan' => 3,
                'Mengandung_Kata-kata_Kasar' => 4,
                'Mengandung_Unsur_Pornografi' => 4,
                'Kualitas_Tayangan' => 3,
                'Ketersediaan_Opsi_Bahasa' => 3,
                'Durasi_Tayang' => 5,
                'Menambah_wawasan' => 1,
            ],
            [
                'nama' => 'Adit sopo jarwo',
                'Bersifat_Mendidik' => 4,
                'Menghibur' => 1,
                'Bersifat_Kreatif' => 2,
                'Mengandung_Kekerasan' => 3,
                'Mengandung_Kata-kata_Kasar' => 4,
                'Mengandung_Unsur_Pornografi' => 4,
                'Kualitas_Tayangan' => 3,
                'Ketersediaan_Opsi_Bahasa' => 3,
                'Durasi_Tayang' => 5,
                'Menambah_wawasan' => 1,
            ],
            [
                'nama' => 'Adit sopo jarwo',
                'Bersifat_Mendidik' => 4,
                'Menghibur' => 1,
                'Bersifat_Kreatif' => 2,
                'Mengandung_Kekerasan' => 3,
                'Mengandung_Kata-kata_Kasar' => 4,
                'Mengandung_Unsur_Pornografi' => 4,
                'Kualitas_Tayangan' => 3,
                'Ketersediaan_Opsi_Bahasa' => 3,
                'Durasi_Tayang' => 5,
                'Menambah_wawasan' => 1,
            ],
            #16
            [
                'nama' => 'Adit sopo jarwo',
                'Bersifat_Mendidik' => 4,
                'Menghibur' => 1,
                'Bersifat_Kreatif' => 2,
                'Mengandung_Kekerasan' => 3,
                'Mengandung_Kata-kata_Kasar' => 4,
                'Mengandung_Unsur_Pornografi' => 4,
                'Kualitas_Tayangan' => 3,
                'Ketersediaan_Opsi_Bahasa' => 3,
                'Durasi_Tayang' => 5,
                'Menambah_wawasan' => 1,
            ],
            [
                'nama' => 'Adit sopo jarwo',
                'Bersifat_Mendidik' => 4,
                'Menghibur' => 1,
                'Bersifat_Kreatif' => 2,
                'Mengandung_Kekerasan' => 3,
                'Mengandung_Kata-kata_Kasar' => 4,
                'Mengandung_Unsur_Pornografi' => 4,
                'Kualitas_Tayangan' => 3,
                'Ketersediaan_Opsi_Bahasa' => 3,
                'Durasi_Tayang' => 5,
                'Menambah_wawasan' => 1,
            ],
            [
                'nama' => 'Adit sopo jarwo',
                'Bersifat_Mendidik' => 4,
                'Menghibur' => 1,
                'Bersifat_Kreatif' => 2,
                'Mengandung_Kekerasan' => 3,
                'Mengandung_Kata-kata_Kasar' => 4,
                'Mengandung_Unsur_Pornografi' => 4,
                'Kualitas_Tayangan' => 3,
                'Ketersediaan_Opsi_Bahasa' => 3,
                'Durasi_Tayang' => 5,
                'Menambah_wawasan' => 1,
            ],
            [
                'nama' => 'Adit sopo jarwo',
                'Bersifat_Mendidik' => 4,
                'Menghibur' => 1,
                'Bersifat_Kreatif' => 2,
                'Mengandung_Kekerasan' => 3,
                'Mengandung_Kata-kata_Kasar' => 4,
                'Mengandung_Unsur_Pornografi' => 4,
                'Kualitas_Tayangan' => 3,
                'Ketersediaan_Opsi_Bahasa' => 3,
                'Durasi_Tayang' => 5,
                'Menambah_wawasan' => 1,
            ],
        ]);
    }
}
