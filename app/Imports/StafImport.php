<?php

namespace App\Imports;

use App\Models\Staf;
use Maatwebsite\Excel\Concerns\ToModel;

class StafImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Staf([
            'nama' => $row[1],
            'nidn' => $row[2],
            'jabatan' => $row[3],
        ]);
    }
}
