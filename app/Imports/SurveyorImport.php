<?php

namespace App\Imports;

use App\Models\Surveyor;
use Maatwebsite\Excel\Concerns\ToModel;
use Grimzy\LaravelMysqlSpatial\Types\Point;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Carbon\Carbon;


class SurveyorImport implements ToModel, WithStartRow
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
        $baseDate = Carbon::createFromDate(1899, 12, 30);
        return new Surveyor([
            "village" => $row[1],
            "block" => $row[0],
            "location" => new Point($row[3], $row[4]),
            "hh_id" => $row[2],
            "survey_date" => $baseDate->copy()->addDays($row[6]),
            "surveyor_name" => $row[7],
            "team" => $row[8],
            "lvu" => $baseDate->copy()->addDays($row[6])
        ]);
    }
}
