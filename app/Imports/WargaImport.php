<?php

namespace App\Imports;

use App\Models\Warga;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class WargaImport implements ToCollection
{
    public function collection(Collection $rows)
    {
        // Lewati header
        $rows->shift();

        foreach ($rows as $row) {

            if (empty($row[0])) {
                continue;
            }

            $nik = preg_replace('/\D/', '', $row[0]);

            if (strlen($nik) != 16) {
                continue;
            }

            if (Warga::where('nik', $nik)->exists()) {
                continue;
            }

            Warga::create([

                'nik' => $nik,

                'no_kk' => preg_replace('/\D/', '', $row[1]),

                'nama' => trim($row[2]),

                'jenis_kelamin' => trim($row[3]),

                'tempat_lahir' => trim($row[4]),

                'tanggal_lahir' => date(
                    'Y-m-d',
                    strtotime($row[5])
                ),

                'agama' => trim($row[6]),

                'pendidikan' => trim($row[7]),

                'pekerjaan' => trim($row[8]),

                'status_hubungan' => trim($row[9]),

                'nama_ayah' => trim($row[10]),

                'nama_ibu' => trim($row[11]),

                'rt' => trim($row[12]),

                'rw' => trim($row[13]),

                'dusun' => trim($row[14]),

                'alamat' => trim($row[15]),

            ]);
        }
    }
}