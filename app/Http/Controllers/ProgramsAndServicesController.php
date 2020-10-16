<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

use Session;
session_start();


class ProgramsAndServicesController extends Controller
{
    public function TVETprograms()
    {
        return view('ProgramServices.TVETprograms');
    }
     public function centerbasedd()
    {
        $all_qualification_info=DB::table('qualification')
                ->get();

        $manage_qualification=view('ProgramServices.centerbasedd')
                ->with('all_qualification_info', $all_qualification_info);

        return view('layoutEvery')
                ->with('centerbasedd',$manage_qualification);
    }
    public function acahome()
    {
        return view('ProgramServices.acahome');
    }
    public function aca()
    {
        return view('ProgramServices.aca');
    }
    public function viewar()
    {
        return view('ProgramServices.viewar');
    }
    public function listaa()
    {
        return view('ProgramServices.listaa');
    }
}
