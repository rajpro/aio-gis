<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demographic;
use App\Models\Surveyor;

class InvoiceController extends Controller
{
    public function index()
    {
        return view('invoice.index');
    }

    public function create()
    {
        return view('invoice.create');
    }

    public function ticket()
    {
        return view('invoice.ticket');
    }

    public function survey()
    {
        return view('invoice.survey');
    }

    public function document(Request $request)
    {
        if ($request->isMethod('post')){
            
            $d = Surveyor::where("hh_id", $request->id)->first();
            $d = Demographic::where('surveyor_id', $d->id)->first();
            $c = $d->documents;
            $l = $request->file('image')->store('documents', 'public');
            $c[$request->name] = $l;
            $d->documents = $c;
            $d->update();
            return redirect()->back();
        }
        return view('invoice.document');
    }
}
