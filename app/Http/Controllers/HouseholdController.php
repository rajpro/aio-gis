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
    public function index(Request $request)
    {
        // $data = Surveyor::first();
        // $d = $data->demographic->documents;
        // $k = [
        //     "10th Certificate" => "10th-cert.jpeg",
        //     "Land Certificate" => "land-certificate.jpg"
        // ];
        // $data->demographic->documents = $k;
        // $data->demographic->update();
        // dd("working");

        if(empty($request->searchfor)){
            $data = Surveyor::paginate(50)->withQueryString();
        }else if($request->searchfor == "head_name"){
            $search = $request->search;
            $data = Surveyor::whereHas('demographic', function($q) use ($search) {
                $q->where('head_name', 'like', '%' . $search . '%');
            })->paginate(50)->withQueryString();
        }else{
            $data = Surveyor::where($request->searchfor, "like", "%".$request->search."%")->paginate(50)->withQueryString();
        }
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
    public function demoAjax($type, $id)
    {
        $data = Surveyor::find($id);
        switch ($type) {
            case 'demographic':
                return view('components.modals.demographics', compact('data'));
                break;
            case 'crime':
                return view('components.modals.crime', compact('data'));
                break;
            case 'socio':
                return view('components.modals.socio', compact('data'));
                break;
            
            default:
                return view("No data Found");
                break;
        }
    }
}