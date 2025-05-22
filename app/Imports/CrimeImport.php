<?php

namespace App\Imports;

use App\Models\Crime;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use App\Models\Surveyor;

class CrimeImport implements ToModel, WithStartRow
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
        return new Crime([
            "surveyor_id" => $survey->id,
            "crime" => ($row[32] == "No"?"0":"1"),
            "toc" => $row[33],
            "police" => $row[34],
            "action_take" => $row[35],
            "jail" => $row[36],
            "jail_relative" => $row[37],
            "case" => $row[38],
            "duration" => $row[39],
            "feel_safe" => $row[40],
            "police_visits" => $row[41],
            "vulnerability_flags" => $row[42]
        ]);
    }
}
