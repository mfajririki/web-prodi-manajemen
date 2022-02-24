<?php

namespace App\Imports;

use App\Models\BidangMinat;
use Maatwebsite\Excel\Concerns\ToModel;

class BidangMinatImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new BidangMinat([
            'kode_mk' => $row[1],
            'nama_mk' => $row[2],
            'bidangminat' => $row[3],
            'kelompok_mk' => $row[4],
            'semester' => $row[5],
            'sks' => $row[6],
            'stream' => $row[7]
        ]);
    }
}
