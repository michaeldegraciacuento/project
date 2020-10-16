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
use Session;
use Auth;
session_start();

class TraineeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:trainee');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('Trainee.traineedash');
    }
    public function addExam()
    {
        return view('Trainee.addExam');
    }
    
    public function csspage1()
    {
        return view('CSSPAGE.17csspage');
    }
    public function slidingpicture1()
    {
        return view('CSSPAGE.traineepage.14slidingpicture');
    }
    public function accomplishment1()
    {
        return view('CSSPAGE.traineepage.1accomplishment');
    }
    public function profile1()
    {
        return view('CSSPAGE.traineepage.11profile');
    }
    public function vmo1()
    {
        return view('CSSPAGE.traineepage.16vmo');
    }
    public function stories1()
    {
        return view('CSSPAGE.traineepage.15stories');
    }
    public function schedules1()
    {
        return view('CSSPAGE.traineepage.13schedules');
    }
    public function partners1()
    {
        return view('CSSPAGE.traineepage.10partners');
    }

    public function attSheets1()
    {
        return view('CSSPAGE.traineepage.4attSheets');
    }
    public function actMatrix1()
    {
        return view('CSSPAGE.traineepage.3actMatrix');
    }
    public function achieveSheets1()
    {
        return view('CSSPAGE.traineepage.2achieveSheets');
    }
    public function progSheets1()
    {
        return view('CSSPAGE.traineepage.12progSheets');
    }
    public function isag1()
    {
        return view('CSSPAGE.traineepage.9isag');
    }
   
    public function iar1()
    {
        return view('CSSPAGE.traineepage.7iar');
    }
    public function houseSched1()
    {
        return view('CSSPAGE.traineepage.6houseSched');
    }
    public function ems1()
    {
        return view('CSSPAGE.traineepage.5ems');
    }
    public function assessmentlink()
    {
        return view('CSSPAGE.traineepage.assessmentlink');
    }
  
    public function search(Request $request)
    {
        $search=$request->get('search');
        $assresult=DB::table('assresult')->where('assresult_traineename', 'like', '%'.$search.'%')->paginate(2);

        return view('CSSPAGE.traineepage.assessmentresult', ['assresult' => $assresult]);
    }
    // start assres   // add edit delete
    public function assessmentresult()
    {
        $assresult=DB::table('assresult')
                ->get();

        $manage_qualification=view('CSSPAGE.traineepage.assessmentresult')
                ->with('assresult', $assresult);

        return view('layouts.trainee')
                ->with('assessmentresult',$manage_qualification);
        
    }
    public function search1(Request $request)
    {
        $search1=$request->get('search1');
        $pre=DB::table('pre')->where('pre_traineename', 'like', '%'.$search1.'%')->paginate(2);

        return view('CSSPAGE.traineepage.preresult', ['pre' => $pre]);
    }
    public function preresult()
    {
        $pre=DB::table('pre')
                ->get();

        $manage_qualification=view('CSSPAGE.traineepage.preresult')
                ->with('pre', $pre);

        return view('layouts.trainee')
                ->with('preresult',$manage_qualification);
        
    }
    public function search2(Request $request)
    {
        $search2=$request->get('search2');
        $post=DB::table('post')->where('post_traineename', 'like', '%'.$search2.'%')->paginate(2);

        return view('CSSPAGE.traineepage.postresult', ['post' => $post]);
    }
    public function postresult()
    {
        $post=DB::table('post')
                ->get();

        $manage_qualification=view('CSSPAGE.traineepage.postresult')
                ->with('post', $post);

        return view('layouts.trainee')
                ->with('postresult',$manage_qualification);
        
    }
    public function cblm()
    {
        return view('CSSPAGE.traineepage.cblm');
    }
    public function ems()
    {
        return view('CSSPAGE.traineepage.ems');
    }
    public function hs()
    {
        return view('CSSPAGE.traineepage.hs');
    }
    public function iar()
    {
        return view('CSSPAGE.traineepage.iar');
    }
    public function irs()
    {
        return view('CSSPAGE.traineepage.irs');
    }
    public function isag()
    {
        return view('CSSPAGE.traineepage.isag');
    }
    public function ctrainingschedule()
    {
        return view('CSSPAGE.traineepage.ctrainingschedule');
    }
    public function achievementssheets()
    {
        return view('CSSPAGE.traineepage.achievementssheets');
    }
    public function attendancesheets()
    {
        return view('CSSPAGE.traineepage.attendancesheets');
    }
    public function activitymatrix()
    {
        return view('CSSPAGE.traineepage.activitymatrix');
    }
    public function trainingschedule()
    {
        return view('CSSPAGE.traineepage.trainingschedule');
    }
    public function progresssheets()
    {
        return view('CSSPAGE.traineepage.progresssheets');
    }
}
