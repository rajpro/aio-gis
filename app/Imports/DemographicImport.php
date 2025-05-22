<?php

namespace App\Imports;

use App\Models\Demographic;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use App\Models\Surveyor;

class DemographicImport implements ToModel, WithStartRow
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
        return new Demographic([
            "surveyor_id" => $survey->id,
            'head_name' => $row[10],
            'gender' => $row[11],
            'age' => $row[12],
            'total_member' => $row[13],
            'member_details' => [
                "Male" => $row[14],
                "Female" => $row[15],
                "Child" => $row[16]
            ],
            'literacy' => $row[17],
            'primary_occupation' => $row[18]
        ]);
    }
}
