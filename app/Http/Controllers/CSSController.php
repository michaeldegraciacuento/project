<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

use Session;
session_start();


class CSSController extends Controller
{
    public function csspage()
    {
        return view('CSSPAGE.csspage');
    }
    public function slidingpicture()
    {
        return view('CSSPAGE.Home.slidingpicture');
    }
    public function accomplishment()
    {
        return view('CSSPAGE.Home.accomplishment');
    }
    public function profile()
    {
        return view('CSSPAGE.Home.profile');
    }
    public function vmo()
    {
        return view('CSSPAGE.Home.vmo');
    }
    public function stories()
    {
        return view('CSSPAGE.Home.stories');
    }
    public function schedules()
    {
        return view('CSSPAGE.Home.schedules');
    }
    public function partners()
    {
        return view('CSSPAGE.Home.partners');
    }
    
    
    public function cblm1()
    {
        return view('CSSPAGE.Home.csshomepage.cblm1');
    }
    public function ems1()
    {
        return view('CSSPAGE.Home.csshomepage.cblm1');
    }
    public function hs1()
    {
        return view('CSSPAGE.Home.csshomepage.hs1');
    }
    public function iar1()
    {
        return view('CSSPAGE.Home.csshomepage.iar1');
    }
    public function irs1()
    {
        return view('CSSPAGE.Home.csshomepage.irs1');
    }
    public function isag1()
    {
        return view('CSSPAGE.Home.csshomepage.isag1');
    }
    public function ctrainingschedule1()
    {
        return view('CSSPAGE.Home.csshomepage.ctrainingschedule1');
    }
    public function achievementssheets1()
    {
        return view('CSSPAGE.Home.csshomepage.achievementssheets1');
    }
    public function attendancesheets1()
    {
        return view('CSSPAGE.Home.csshomepage.attendancesheets1');
    }
    public function activitymatrix1()
    {
        return view('CSSPAGE.Home.csshomepage.activitymatrix1');
    }
    public function trainingschedule1()
    {
        return view('CSSPAGE.Home.csshomepage.trainingschedule1');
    }
    public function progresssheets1()
    {
        return view('CSSPAGE.Home.csshomepage.progresssheets1');
    }

}
