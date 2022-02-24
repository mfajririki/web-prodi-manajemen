<?php

namespace App\Imports;

use App\Models\ProfileLulusan;
use Maatwebsite\Excel\Concerns\ToModel;

class ProfileLulusanImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new ProfileLulusan([
            'no' => $row[1],
            'nama' => $row[2],
            'deskripsi' => $row[3]
        ]);
    }
}
