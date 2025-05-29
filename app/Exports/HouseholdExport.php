<?php

namespace App\Exports;

use App\Models\Surveyor;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class HouseholdExport implements FromCollection, WithHeadings
{
    protected $householdIds;

    public function __construct(array $householdIds)
    {
        $this->householdIds = $householdIds;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Surveyor::when(!empty($this->householdIds), function ($query) {
                return $query->whereIn('id', $this->householdIds);
            })->get()->map(function ($survey) {
            return [
                'gp'   => $survey->block,
                'village'  => $survey->village,
                'hh_id' => $survey->hh_id,
                'surveyor_name' => $survey->surveyor_name,
                'team' => $survey->team,
                'head_name' => $survey->demographic->head_name,
                'gender' => $survey->demographic->gender,
                'age' => $survey->demographic->age,
                'total_member' => $survey->demographic->total_member,
                'literacy' => $survey->demographic->literacy,
                'primary_occupation' => $survey->demographic->primary_occupation,
                'forest_production' => $survey->socio->forest_production,
                'land_holding' => $survey->socio->land_holding,
                'support_received' => $survey->socio->support_received,
                'debt' => $survey->socio->debt,
                'loan' => $survey->socio->loan,
                'crime' => ($survey->socio->crime==0? "No": "Yes"),
                'jail' => $survey->crime->jail,
                'jail_relative' => $survey->crime->jail_relative,
                'case' => $survey->crime->case,
                'duration' => $survey->crime->duration,
                'police_visits' => $survey->crime->police_visits
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
            "Surveyor Team",
            "Head Name",
            "Gender",
            "Age",
            "Total Member",
            "Literacy",
            "Primary Occupation",
            "Forest Production",
            "Land Holding",
            "Support Received",
            "Debt",
            "Loan",
            "Loan Reason",
            "Crime",
            "Jail",
            "Relative in Jail",
            "Case",
            "Duration",
            "Police Visits"
        ];
    }
}
