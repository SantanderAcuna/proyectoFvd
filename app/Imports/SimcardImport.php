<?php

namespace App\Imports;

use App\Simcard;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class SimcardImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Simcard([
            'id'     => $row[0],
            'iccid'    => $row[1],
            'contenido'    => $row[2],
            'valor'    => $row[3],
        ]);
    }
}
