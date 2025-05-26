<?php

namespace App\Exports;

use App\Models\Surveyor;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class HouseholdExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Surveyor::all()->map(function ($survey) {
            return [
                'gp'   => $survey->block,
                'village'  => $survey->village,
                'hh_id' => $survey->hh_id,
                'surveyor_name' => $survey->surveyor_name,
                'team' => $survey->team
            ];
        });
    }

    public function headings(): array
    {
        return [
            "GP Name",
            "Village",
            "Household ID",
            "Surveyor Name",
            "Surveyor Team"
        ];
    }
}
