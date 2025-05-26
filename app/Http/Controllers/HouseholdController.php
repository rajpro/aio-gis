<?php

namespace App\Http\Controllers;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\SurveyorImport;
use App\Imports\DemographicImport;
use App\Imports\CrimeImport;
use App\Imports\SocioImport;
use App\Exports\HouseholdExport;
use App\Models\Surveyor;
use App\Models\Crime;
use App\Models\Socio;
use App\Models\Demographic;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

use Illuminate\Http\Request;

class HouseholdController extends Controller
{
    public function index()
    {
        $data = Surveyor::limit(50)->get();
        return view('components.household', compact('data'));
    }

    public function dashboard()
    {
        $cards['hhs'] = Surveyor::count('*');
        $cards['gp'] = Surveyor::distinct('village')->count('*');
        $cards['population'] = Demographic::selectRaw('SUM(total_member) as total')->first();
        $cards['village'] = Surveyor::distinct('block')->count('*');

        $ngo = Surveyor::select('team')->distinct()->get();

        $village = DB::table('surveyors')
            ->whereIn('block', function ($query) {
                $query->select('block')
                    ->from('surveyors')
                    ->groupBy('block')
                    ->havingRaw('COUNT(DISTINCT village) > 1');
            })
            ->select('block', 'village')
            ->distinct()
            ->get();

        return view('dashboard', compact('cards', 'ngo', 'village'));
    }

    public function dataUpload(Request $request)
    {
        if ($request->isMethod('post')){
            Excel::import(new SurveyorImport, $request->file('file'));
            Excel::import(new DemographicImport, $request->file('file'));
            Excel::import(new CrimeImport, $request->file('file'));
            Excel::import(new SocioImport, $request->file('file'));
        }
        return view('components.dataupload');
    }

    public function downloadExcel(Request $request)
    {
        return Excel::download(new HouseholdExport, 'household.xlsx');
    }

    public function view(Request $request, $id)
    {
        $data = Surveyor::find($id);
        $demo_column = collect(Schema::getColumnListing('demographics'))
            ->reject(fn($col) => in_array($col, ['id', 'created_at', 'surveyor_id', 'updated_at']))
            ->values();
        $crime_column = collect(Schema::getColumnListing('crimes'))
            ->reject(fn($col) => in_array($col, ['id', 'created_at', 'surveyor_id', 'updated_at']))
            ->values();
        $socio_column = collect(Schema::getColumnListing('socios'))
            ->reject(fn($col) => in_array($col, ['id', 'created_at', 'surveyor_id', 'updated_at']))
            ->values();
        $pdf = Pdf::loadView('components.modals.household', compact('demo_column', 'crime_column', 'socio_column', 'data'));
        return $pdf->stream();
    }

    // Ajax Calls
    public function demoAjax($id)
    {
        // $demog = [];
        $data = Surveyor::find($id);
        
        // foreach($data as $value){
        //     if(!empty($demog['total_population'])){
        //         $demog['total_hh'] += 1;
        //         $demog['total_population'] += $value->demographic->total_member;
        //         $demog['male'] += $value->demographic->member_details['Male'];
        //         $demog['female'] += $value->demographic->member_details['Female'];
        //     }else{
        //         $demog['total_hh'] = 1;
        //         $demog['total_population'] = $value->demographic->total_member;
        //         $demog['male'] = $value->demographic->member_details['Male'];
        //         $demog['female'] = $value->demographic->member_details['Female'];
        //     }
        // }

        return view('components.modals.demographics', compact('data'));
    }
}