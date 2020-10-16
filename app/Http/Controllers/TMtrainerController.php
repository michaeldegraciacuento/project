<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use APP\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Session;
use Auth;


class TMtrainerController extends Controller
{
   /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function __construct()
     {
         $this->middleware('auth:tvet');
     }
 
     /**
      * Show the application dashboard.
      *
      * @return \Illuminate\Contracts\Support\Renderable
      */
     public function index()
     {
         return view('TVET.tvetdash');
     }
    public function TVETTrainerHomepage()
    {
        return view('TMLevel1.TVETTrainer.TVETTrainerHomepage');
    }
    public function tmac()
    {
        return view('TMLevel1.TVETTrainer.navigation.tmac');
    }
    public function tmaccomreport()
    {
        return view('TMLevel1.TVETTrainer.navigation.tmaccomreport');
    }
    public function tmam()
    {
        return view('TMLevel1.TVETTrainer.navigation.tmam');
    }
    public function tmcb()
    {
        return view('TMLevel1.TVETTrainer.navigation.tmcb');
    }
    public function tmcblm()
    {
        return view('TMLevel1.TVETTrainer.navigation.tmcblm');
    }
    public function tmgallery()
    {
        return view('TMLevel1.TVETTrainer.navigation.tmgallery');
    }
    public function tmias()
    {
        return view('TMLevel1.TVETTrainer.navigation.tmias');
    }
    public function tmisag()
    {
        return view('TMLevel1.TVETTrainer.navigation.tmisag');
    }
    public function tmpc()
    {
        return view('TMLevel1.TVETTrainer.navigation.tmpc');
    }
    public function tmprofile()
    {
        return view('TMLevel1.TVETTrainer.navigation.tmprofile');
    }
    public function tmtc()
    {
        return view('TMLevel1.TVETTrainer.navigation.tmtc');
    }
    public function tmtemplates()
    {
        return view('TMLevel1.TVETTrainer.navigation.tmtemplates');
    }
    public function tmtr()
    {
        return view('TMLevel1.TVETTrainer.navigation.tmtr');
    }
    public function tmvmo()
    {
        return view('TMLevel1.TVETTrainer.navigation.tmvmo');
    }

    



}