<?php

namespace Database\Seeders;

use App\Models\VisiMisi;
use Illuminate\Database\Seeder;

class VisiMisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        VisiMisi::insert([
            'visi' => 'Menjadi program studi manajemen yang bermutu dan dapat menghasilkan sarjana manajemen 
                    yang memiliki daya saing baik di tingkat nasional dan internasional 2025',
            'misi' => 'Menyelenggarakan kegiatan pendidikan, Penelitian dan Pengabdian Kepada Masyarakat, 
                    dengan memperhatikan mutu kurikulum, proses belajar mengajar yang baik, dengan tenaga 
                    pengajar yang berkualitas dan profesional.'
        ]);
    }
}
