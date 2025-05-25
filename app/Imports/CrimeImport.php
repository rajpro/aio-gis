<?php

namespace App\Imports;

use App\Models\Crime;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use App\Models\Surveyor;

class CrimeImport implements ToModel, WithStartRow
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
        return new Crime([
            "surveyor_id" => $survey->id,
            "crime" => ($row[37] == "No"?"0":"1"),
            "toc" => $row[38],
            "police" => $row[39],
            "action_take" => $row[40],
            "jail" => $row[41],
            "jail_relative" => $row[42],
            "case" => $row[43],
            "duration" => $row[44],
            "feel_safe" => $row[45],
            "police_visits" => $row[46],
            "vulnerability_flags" => $row[47],
            "admin_control" => $row[48]
        ]);
    }
}
