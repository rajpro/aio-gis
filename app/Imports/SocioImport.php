<?php

namespace App\Imports;

use App\Models\Socio;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use App\Models\Surveyor;

class SocioImport implements ToModel, WithStartRow
{

    /**
     * Specify the row number to start reading from.
     *
     * @return int
     */
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
        $survey = Surveyor::where('hh_id', $row[2])->first();
        return new Socio([
            "surveyor_id" => $survey->id,
            "forest_production" => $row[19],
            "qty" => $row[20],
            "forest_harvest_week" => $row[21],
            "forest_harvest_ton" => round($row[22]),
            "income_per_wk" => $row[23],
            "income_per_mo" => $row[24],
            "gross_revenue" => $row[25],
            "pci" => round($row[26], 2),
            "seasonal_variation" => $row[27],
            "peak_mo" => $row[28],
            "gov_investment" => $row[29],
            "land_holding" => $row[30],
            "land_use" => $row[31],
            "support_received" => $row[32],
            "debt" => $row[33],
            "debt_src" => $row[34],
            "loan" => $row[35],
            "loan_reason" => $row[36]
        ]);
    }
}