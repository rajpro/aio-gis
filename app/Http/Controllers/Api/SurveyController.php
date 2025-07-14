<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\SurveyDemographicRequest;
use App\Models\Demographic;
use App\Models\Surveyor;
use Grimzy\LaravelMysqlSpatial\Types\Point;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $a = auth()->user();
        $demo = Demographic::where('surveyor_id', $a->id)->get();
        if(empty($demo)){
            return response()->json(['status'=>false, 'message'=> "No Record Found"]);
        }
        return response()->json(['status'=>true, 'message'=>'Record Found', 'data'=> $demo->toArray()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SurveyDemographicRequest $request)
    {
        $user = auth()->user();
        $data = [
            "block" => $request->block,
            "village" => $request->village,
            "hh_id" => $this->__hhIdGenerate($request->all()),
            "surveyor_name" => $user->surveyor,
            "team" => $user->ngo,
            "survey_date" => now(),
            "lvu" => now(),
            "status" => "Surveyed",
            "location" => new Point($request->lat, $request->lng),
        ];
        $survey = new Surveyor($data);
        if(!$survey->save()){
            return response()->json(['status'=>false, 'message'=>"There is internal error. Please try after some time."]);
        }
        return response()->json(['status'=>true, 'message'=>"Survey Record Stored.", 'data'=>$survey->toArray()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function __hhIdGenerate($data)
    {
        $string = "HH-";
        $string .= strtoupper(substr($data['block'], 0, 4))."-";
        $string .= strtoupper(substr($data['village'], 0, 4))."-";
        $result = Surveyor::where('hh_id', 'like', "%".$string."%")->get();
        if($result->count() == 0){
            $string .= "01";
        }else{
            $str = $result[count($result)-1]->hh_id;
            $parts = explode('-', $str);
            $last = $parts[count($parts) - 1];
            $next = (int)$last + 1;
            $nextFormatted = $next < 10 ? '0' . $next : (string)$next;
            $string .= $nextFormatted;
        }
        return $string;
    }
}