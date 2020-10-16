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
session_start();


class FinanceController extends Controller
{

    use AuthenticatesUsers;
        /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function __construct()
     {
         $this->middleware('auth:fin');
     }
      /**
      * Show the application dashboard.
      *
      * @return \Illuminate\Contracts\Support\Renderable
      */
      public function index()
      {
          return view('Finance.Admin.findash');
      }
      
      public function deletelinkupdate( $linkupdate_id )
      {
          DB::table('linkupdate')
                  ->where('linkupdate_id',$linkupdate_id)
                  ->delete();
          return Redirect::to('/linkupdate');
      }
      public function eupdatelinkupdate(Request $request,$linkupdate_id)
      {
          $data = array();
          $data['linkupdate_headrep'] = $request->linkupdate_headrep;
          $data['linkupdate_year'] = $request->linkupdate_year;
          $data['linkupdate_date'] = $request->linkupdate_date;
          $data['linkupdate_url'] = $request->linkupdate_url;
          
          DB::table('linkupdate')
              ->where('linkupdate_id', $linkupdate_id)
              ->update($data);
          Session::put('exception','Well done!');
          return Redirect::to('/linkupdate');
      }
      public function updatelinkupdate( $linkupdate_id )
      {
          $linkupdate_desc_edit=DB::table('linkupdate')
                  ->select('*')
                  ->where('linkupdate_id',$linkupdate_id)
                  ->first();
          $manage_desc_edit=view('Finance.Admin.updatelinkupdate')
                  ->with('linkupdate_desc_edit',$linkupdate_desc_edit);
          return view('layouts.fin')
                  ->with('updatelinkupdate/'.$linkupdate_id, $manage_desc_edit);
      }
      public function eaddlinkupdate(Request $request)
      {          
          foreach($request->linkupdate_url as $i =>$data)
          {
              $data2 = array(
                  'linkupdate_headrep' => $request->linkupdate_headrep,
                  'linkupdate_date' => $request->linkupdate_date[$i],
                  'linkupdate_year' => $request->linkupdate_year[$i],
                  'linkupdate_url' => $request->linkupdate_url[$i],                
              );
              DB::table('linkupdate')->insert($data2); 
 
              
          }
             
          Session::put('exception','Well done!');
          
          return Redirect::to('/linkupdate');
      }
      public function linkupdate()
      {
          return view('Finance.Admin.linkupdate');
      }
      public function addlinkupdate()
      {
          return view('Finance.Admin.addlinkupdate');
      }
      
    
}