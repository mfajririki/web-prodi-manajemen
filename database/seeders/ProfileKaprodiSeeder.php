<?php

namespace Database\Seeders;

use App\Models\ProfileKaprodi;
use Illuminate\Database\Seeder;

class ProfileKaprodiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProfileKaprodi::insert([
            'nama' => 'Dr. Dina Mellita, S.E., M.E.c.',
            'kutipan' => 'Tujuan strategis yang akan dicapai menghasilkan lulusan yang memiliki kemampuan 
                        untuk menganalisis, merancang dan mengelola perusahaan serta memiliki wawasan terbuka, 
                        sebagai pelaku bisnis, konsultan, pemasar dan pendistribusian produk dan mampu 
                        berwirausaha serta dapat menciptakan lapangan pekerjaan.'
        ]);
    }
}
