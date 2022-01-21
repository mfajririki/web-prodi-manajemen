<?php

namespace Database\Seeders;

use App\Models\Tujuans;
use Illuminate\Database\Seeder;

class TujuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tujuans::insert([
            'konten_tujuan' => 'Melaksanakan pembelajaran dalam bidang manajemen yang didasarkan atas kurikulum 
                                dan permintaan pasar kerja, serta melakukan penyesuiaan kompetensi lulusan yang 
                                disesuaikan dengan permintaan pasar kerja serta yang dibutuhkan oleh masyarakat baik 
                                yang berkemampuan untuk berwirausaha maupun mampu untuk bekerja di perusahaan nasional 
                                dan internasional.
                                Menghasilkan program studi manajemen yang profesional, memiliki integritas dan mandiri, Cerdas dan berkarakter serta berjiwa pemimpin.'
        ]);
    }
}
