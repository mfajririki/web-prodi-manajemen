<?php

namespace App\Imports;

use App\Models\Kurikulums;
use Maatwebsite\Excel\Concerns\ToModel;

class KurikulumImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Kurikulums([
            'kode_mk' => $row[1],
            'nama_mk' => $row[2],
            'kelompok_mk' => $row[3],
            'sks' => $row[4],
            'semester' => $row[5]
        ]);
    }
}
