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
session_start();

class TMAdminController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function __construct()
     {
         $this->middleware('auth:tm');
     }
      /**
      * Show the application dashboard.
      *
      * @return \Illuminate\Contracts\Support\Renderable
      */
      public function index()
      {
          return view('TMLevel1.Admin.tmdash');
      }
    public function tmhome()
    {
        return view('TMLevel1.Admin.tmhome');
    }
     // start pre// add edit delete
     public function tmpretest()
     {
         return view('TMLevel1.Admin.tmpretest');
     }
     public function tmpreupdate( $tmpre_id )
     {
         $tmpres_desc_edit=DB::table('tmpre')
                 ->select('*')
                 ->where('tmpre_id',$tmpre_id)
                 ->first();
         $manage_desc_edit=view('TMLevel1.Admin.tmpreupdate')
                 ->with('tmpres_desc_edit',$tmpres_desc_edit);
         return view('layouts.tm')
                 ->with('tmpreupdate/'.$tmpre_id, $manage_desc_edit);
     }
     public function tmpreupdates( Request $request, $tmpre_id )
     {
         $data = array();
         $data['tmpre_traineename'] = $request->tmpre_traineename;
         $data['tmpre_result'] = $request->tmpre_result;
        
     
         DB::table('tmpre')
                 ->where('tmpre_id', $tmpre_id)
                 ->update($data);
             Session::put('message', 'Well donee');
             return Redirect::to('tmpretest/');
     }   
     public function tmpredelete( $tmpre_id )
     {
       
 
         DB::table('tmpre')
                 ->where('tmpre_id',$tmpre_id)
                 ->delete();
 
                 return Redirect::to('/tmpretest');
     }
     public function tmpreadd()
     {
         return view('TMLevel1.Admin.tmpreadd');
     }
     public function tmaddprefunctions(Request $request)
     {
                 $data = array();
                 $data['tmpre_traineename'] = $request->tmpre_traineename;
                 $data['tmpre_result'] = $request->tmpre_result;
                
 
                 DB::table('tmpre')->insert($data);
                 Session::put('exception', 'Well Done!');
                 return Redirect::to('/tmpretest');
            
     }
 
     // end pre// add edit delete

      // start pre// add edit delete
      public function tmposttest()
      {
          return view('TMLevel1.Admin.tmposttest');
      }
      public function tmpostupdate( $tmpost_id )
      {
          $tmposts_desc_edit=DB::table('tmpost')
                  ->select('*')
                  ->where('tmpost_id',$tmpost_id)
                  ->first();
          $manage_desc_edit=view('TMLevel1.Admin.tmpostupdate')
                  ->with('tmposts_desc_edit',$tmposts_desc_edit);
          return view('layouts.tm')
                  ->with('tmpostupdate/'.$tmpost_id, $manage_desc_edit);
      }
      public function tmpostupdates( Request $request, $tmpost_id )
      {
          $data = array();
          $data['tmpost_traineename'] = $request->tmpost_traineename;
          $data['tmpost_result'] = $request->tmpost_result;
         
      
          DB::table('tmpost')
                  ->where('tmpost_id', $tmpost_id)
                  ->update($data);
              Session::put('message', 'Well donee');
              return Redirect::to('tmposttest/');
      }   
      public function tmpostdelete( $tmpost_id )
      {
        
  
          DB::table('tmpost')
                  ->where('tmpost_id',$tmpost_id)
                  ->delete();
  
                  return Redirect::to('/tmposttest');
      }
      public function tmpostadd()
      {
          return view('TMLevel1.Admin.tmpostadd');
      }
      public function tmaddpostfunctions(Request $request)
      {
                  $data = array();
                  $data['tmpost_traineename'] = $request->tmpost_traineename;
                  $data['tmpost_result'] = $request->tmpost_result;
                 
  
                  DB::table('tmpost')->insert($data);
                  Session::put('exception', 'Well Done!');
                  return Redirect::to('/tmposttest');
             
      }
  
      // end pre// add edit delete

       //start tmassresult// add edit delete
      public function tmassresult()
    {
        return view('TMLevel1.Admin.tmassresult');
    }
    public function tmassresultupdate( $tmassresult_id )
    {
        $tmasss_desc_edit=DB::table('tmassresult')
                ->select('*')
                ->where('tmassresult_id',$tmassresult_id)
                ->first();
        $manage_desc_edit=view('TMLevel1.Admin.tmassresultupdate')
                ->with('tmasss_desc_edit',$tmasss_desc_edit);
        return view('layouts.tm')
                ->with('tmassresultupdate/'.$tmassresult_id, $manage_desc_edit);
    }
    public function tmassresultupdates( Request $request, $tmassresult_id )
    {
        $data = array();
        $data['tmassresult_traineename'] = $request->tmassresult_traineename;
        $data['tmassresult_result'] = $request->tmassresult_result;
       
    
        DB::table('tmassresult')
                ->where('tmassresult_id', $tmassresult_id)
                ->update($data);
            Session::put('message', 'Well donee');
            return Redirect::to('tmassresult/');
    }   
    public function tmassresultdelete( $tmassresult_id )
    {
      

        DB::table('tmassresult')
                ->where('tmassresult_id',$tmassresult_id)
                ->delete();

                return Redirect::to('/tmassresult');
    }
    public function tmassresultadd()
    {
        return view('TMLevel1.Admin.tmassresultadd');
    }
    public function addtmassresultfunctions(Request $request)
    {
                $data = array();
                $data['tmassresult_traineename'] = $request->tmassresult_traineename;
                $data['tmassresult_result'] = $request->tmassresult_result;
               

                DB::table('tmassresult')->insert($data);
                Session::put('exception', 'Well Done!');
                return Redirect::to('/tmassresult');     
    }
}    