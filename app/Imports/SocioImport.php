<?php

namespace App\Imports;

use App\Models\Socio;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use App\Models\Surveyor;

class SocioImport implements ToModel, WithStartRow
{
    public function startRow(): int
    {
        return 2; // Start reading from the second row
    }

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $survey = Surveyor::where('hh_id', $row[4])->first();
        return new Socio([
            "surveyor_id" => $survey->id,
            "forest_production" => $row[19],
            "qty" => $row[20],
            "income_per_wk" => $row[21],
            "income_per_mo" => $row[22],
            "seasonal_variation" => $row[23],
            "peak_mo" => $row[24],
            "land_holding" => $row[25],
            "land_use" => $row[26],
            "support_received" => $row[27],
            "debt" => $row[28],
            "debt_src" => $row[29],
            "loan" => $row[30],
            "loan_reason" => $row[31]
        ]);
    }
}