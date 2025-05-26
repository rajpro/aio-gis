<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Surveyor;
use App\Models\Demographic;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->page == "demographics"){
            extract($this->demographic());
            return view('report.index', compact('surveyor', 'chart', 'map'));
        } else if($request->page == "crime"){
            extract($this->crime());
            return view('report.crime', compact('surveyor', 'chart'));
        } else if($request->page == "socio"){
            extract($this->socio());
            return view('report.socio', compact('surveyor', 'chart'));
        }
        
    }

    private function map($surveyor) {
        $locations = [];
        foreach ($surveyor as $key => $value) {
            $locations[] = [
                "lat" => $value->location->getLat(),
                "lng" => $value->location->getLng()
            ];
        }
        return json_encode($locations);
    }

    private function demographic()
    {
        $male_female_count = [];
        $chart = [];
        $surveyor = Surveyor::with("demographic")->get();
        $map = $this->map($surveyor);
        foreach($surveyor as $value) {
            if(!empty($male_female_count[$value->village])){
                $male_female_count[$value->village]['Male'] += $value->demographic->member_details["Male"];
                $male_female_count[$value->village]['Female'] += $value->demographic->member_details["Female"];
            }else{
                $male_female_count[$value->village]['Male'] = $value->demographic->member_details["Male"];
                $male_female_count[$value->village]['Female'] = $value->demographic->member_details["Female"];
            }
        }

        foreach ($male_female_count as $key => $value) {
            $chart['label'][] = $key;
            $chart['Male'][] = $value['Male'];
            $chart['Female'][] = $value['Female'];
        }


        return compact("surveyor", 'chart', 'map');
    }

    private function crime()
    {
        $toc = [];
        $chart = [];
        $surveyor = Surveyor::with("crime")->get();
        
        foreach($surveyor as $value) {
            if($value->crime->crime == 1){
                if(empty($toc[$value->crime->toc])){
                    $toc[$value->crime->toc] = 1;
                }else{
                    $toc[$value->crime->toc] += 1;
                }
            }
        }

        foreach ($toc as $key => $value) {
            $chart['label'][] = $key;
            $chart['value'][] = $value;
        }

        return compact("surveyor", "chart");
    }

    private function socio()
    {
        $toc = [];
        $chart = [];
        $surveyor = Surveyor::with("socio")->get();
        
        foreach($surveyor as $value) {
            if(empty($toc[$value->village]['fv'])){
                $toc[$value->village]["fv"] = $value->socio->qty;
            }else{
                $toc[$value->village]["fv"] += $value->socio->qty;
            }
            if(empty($toc[$value->village]['lv'])){
                $toc[$value->village]["lv"] = $value->socio->gov_investment;
            }else{
                $toc[$value->village]["lv"] += $value->socio->gov_investment;
            }
            if(empty($toc[$value->village]['gr'])){
                $toc[$value->village]["gr"] = $value->socio->gross_revenue;
            }else{
                $toc[$value->village]["gr"] += $value->socio->gross_revenue;
            }
        }

        foreach ($toc as $key => $value) {
            $chart['label'][] = $key;
            $chart['fh'][] = $value['fv'];
            $chart['lv'][] = "-".($value['lv'] / 100000);
            $chart['gr'][] = $value['gr'] / 100000;
        }

        return compact("surveyor", "chart");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
}
