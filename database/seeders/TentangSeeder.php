<?php

namespace Database\Seeders;

use App\Models\Tentang;
use Illuminate\Database\Seeder;

class TentangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tentang::insert([
            'konten_tentang' => 'Program studi Manajemen adalah salah satu program studi yang terdapat di 
                            Fakultas Ekonomi Universitas Bina Darma. Program Studi manajemen didukung oleh 
                            sumber daya manusia yang berkualitas cukup baik yang memiliki tenaga dosen sebagian 
                            besar memiliki jenjang pendidikan S2 dan S3, selanjutnya untuk infrastruktur yang 
                            didukung kegiatan program studi manajemen umumnya dipakai bersama-sama dengan program 
                            studi yang ada di lingkungan Universitas Bina Darma. Untuk meningkatkan daya saing 
                            lulusan program studi Manajemen.'
        ]);
    }
}
