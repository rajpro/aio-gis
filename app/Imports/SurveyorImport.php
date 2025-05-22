<?php

namespace App\Imports;

use App\Models\Surveyor;
use Maatwebsite\Excel\Concerns\ToModel;
use Grimzy\LaravelMysqlSpatial\Types\Point;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Carbon\Carbon;


class SurveyorImport implements ToModel, WithStartRow
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
        $baseDate = Carbon::createFromDate(1899, 12, 30);
        return new Surveyor([
            "village" => $row[0],
            "block" => $row[1],
            "location" => new Point($row[2], $row[3]),
            "hh_id" => $row[4],
            "survey_date" => $baseDate->copy()->addDays($row[5]),
            "surveyor_name" => $row[8],
            "team" => $row[9],
            "lvu" => $baseDate->copy()->addDays($row[5])
        ]);
    }
}
