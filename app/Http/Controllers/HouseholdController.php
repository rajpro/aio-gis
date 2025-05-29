<?php

namespace App\Http\Controllers;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\SurveyorImport;
use App\Imports\DemographicImport;
use App\Imports\CrimeImport;
use App\Imports\SocioImport;
use App\Imports\UserImport;
use App\Exports\HouseholdExport;
use App\Models\Surveyor;
use App\Models\Crime;
use App\Models\Socio;
use App\Models\Demographic;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;
use ZipArchive;

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
            $data = Surveyor::where('status', 'Active')->paginate(50)->withQueryString();
        }else if($request->searchfor == "head_name"){
            $search = $request->search;
            $data = Surveyor::where('status', 'Active')->whereHas('demographic', function($q) use ($search) {
                $q->where('head_name', 'like', '%' . $search . '%');
            })->paginate(50)->withQueryString();
        }else{
            $data = Surveyor::where('status', 'Active')->where($request->searchfor, "like", "%".$request->search."%")->paginate(50)->withQueryString();
        }
        return view('components.household', compact('data'));
    }

    public function status(Request $request, $status)
    {
        $status = $status == "incomplete" ? "Surveyed" : ($status == "active" ? "Active" : "Monitoring");
        if(empty($request->searchfor)){
            $data = Surveyor::where('status', $status)->paginate(50)->withQueryString();
        }else if($request->searchfor == "head_name"){
            $search = $request->search;
            $data = Surveyor::where('status', $status)->whereHas('demographic', function($q) use ($search) {
                $q->where('head_name', 'like', '%' . $search . '%');
            })->paginate(50)->withQueryString();
        }else{
            $data = Surveyor::where('status', $status)->where($request->searchfor, "like", "%".$request->search."%")->paginate(50)->withQueryString();
        }
        if($status == "Surveyed"){
            return view('components.incomplete', compact('data'));
        }elseif($status == "Monitoring"){
            return view('components.pending', compact('data'));
        }else{
            return view('components.household', compact('data'));
        }
        
    }

    public function dashboard()
    {
        $breadcrumb = [
            "title" => "Dashboard"
        ];
        $cards['hhs'] = Surveyor::count('*');
        $cards['gp'] = Surveyor::distinct('village')->count('*');
        $cards['population'] = Demographic::selectRaw('SUM(total_member) as total')->first();
        $cards['village'] = Surveyor::distinct('block')->count('*');

        // $ngo = Surveyor::select('team')->distinct()->get();

        // $village = DB::table('surveyors')
        //     ->whereIn('block', function ($query) {
        //         $query->select('block')
        //             ->from('surveyors')
        //             ->groupBy('block')
        //             ->havingRaw('COUNT(DISTINCT village) > 1');
        //     })
        //     ->select('block', 'village')
        //     ->distinct()
        //     ->get();
        $chart = [];
        foreach (config('constants.dashboard.gross_chart') as $key => $value) {
            foreach($value as $v){
                $chart[$key]['line'][] = $v[0];
                $chart[$key]['bar'][] = $v[0];
            }
        }

        return view('dashboard', compact('breadcrumb', 'cards', 'chart'));
    }

    public function dataUpload(Request $request)
    {
        if ($request->isMethod('post')){
            // Excel::import(new UserImport, $request->file('file'));
            // Excel::import(new SurveyorImport, $request->file('file'));
            // Excel::import(new DemographicImport, $request->file('file'));
            // Excel::import(new CrimeImport, $request->file('file'));
            // Excel::import(new SocioImport, $request->file('file'));
        }
        return view('components.dataupload');
    }

    public function downloadExcel(Request $request)
    {
        return Excel::download(new HouseholdExport($request->hh??[]), 'household.xlsx');
    }

    public function downloadDocumentZip($id)
    {
        $surveyor = Surveyor::find($id);
        $zip = new ZipArchive;

        // Destination zip file path
        $zipFileName = 'documents.zip';
        $zipFilePath = storage_path("app/{$zipFileName}");

        // Create or overwrite the zip file
        if ($zip->open($zipFilePath, ZipArchive::CREATE | ZipArchive::OVERWRITE) === TRUE) {
            // Folder inside storage/app/ to zip
            $folder = 'documents';
            $files = Storage::files($folder);

            foreach ($files as $file) {
                // Get real path
                $absolutePath = storage_path("app/{$file}");
                // Add file to zip with relative path
                $zip->addFile($absolutePath, basename($file));
            }

            $zip->close();

            return response()->download($zipFilePath)->deleteFileAfterSend(true);
        } else {
            return response()->json(['error' => 'Could not create ZIP file.'], 500);
        }
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