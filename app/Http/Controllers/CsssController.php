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

class CsssController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:css');
    }
     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('CSSPAGE.CssAdmin.cssdash');
    }


     // start link// add edit delete
    public function csssendlink()
    {
        return view('CSSPAGE.CssAdmin.csssendlink');
    }
    public function cssupdatelink( $link_id )
    {
        $links_desc_edit=DB::table('link')
                ->select('*')
                ->where('link_id',$link_id)
                ->first();
        $manage_desc_edit=view('CSSPAGE.CssAdmin.cssupdatelink')
                ->with('links_desc_edit',$links_desc_edit);
        return view('layouts.css')
                ->with('cssupdatelink/'.$link_id, $manage_desc_edit);
    }
    public function cssupdatelinks( Request $request, $link_id )
    {
        $data = array();
        $data['link_url'] = $request->link_url;
        $data['link_groupcode'] = $request->link_groupcode;
        $data['link_desc'] = $request->link_desc;
       
    
        DB::table('link')
                ->where('link_id', $link_id)
                ->update($data);
            Session::put('message', 'Well donee');
            return Redirect::to('csssendlink/');
    }   
    public function linkdelete( $link_id )
    {
      

        DB::table('link')
                ->where('link_id',$link_id)
                ->delete();

                return Redirect::to('/csssendlink');
    }
    public function cssaddnewlink()
    {
        return view('CSSPAGE.CssAdmin.cssaddnewlink');
    }
    public function addlinkfunctions(Request $request)
    {
                $data = array();
                $data['link_url'] = $request->link_url;
                $data['link_groupcode'] = $request->link_groupcode;
                $data['link_desc'] = $request->link_desc;
               

                DB::table('link')->insert($data);
                Session::put('exception', 'Well Done!');
                return Redirect::to('/csssendlink');
           
    }
     // end link// add edit delete


    // start pre// add edit delete
    public function csspretestresult()
    {
        return view('CSSPAGE.CssAdmin.csspretestresult');
    }
    public function preupdate( $pre_id )
    {
        $pres_desc_edit=DB::table('pre')
                ->select('*')
                ->where('pre_id',$pre_id)
                ->first();
        $manage_desc_edit=view('CSSPAGE.CssAdmin.preupdate')
                ->with('pres_desc_edit',$pres_desc_edit);
        return view('layouts.css')
                ->with('preupdate/'.$pre_id, $manage_desc_edit);
    }
    public function preupdates( Request $request, $pre_id )
    {
        $data = array();
        $data['pre_traineename'] = $request->pre_traineename;
        $data['pre_result'] = $request->pre_result;
       
    
        DB::table('pre')
                ->where('pre_id', $pre_id)
                ->update($data);
            Session::put('message', 'Well donee');
            return Redirect::to('csspretestresult/');
    }   
    public function predelete( $pre_id )
    {
      

        DB::table('pre')
                ->where('pre_id',$pre_id)
                ->delete();

                return Redirect::to('/csspretestresult');
    }
    public function preadd()
    {
        return view('CSSPAGE.CssAdmin.preadd');
    }
    public function addprefunctions(Request $request)
    {
                $data = array();
                $data['pre_traineename'] = $request->pre_traineename;
                $data['pre_result'] = $request->pre_result;
               

                DB::table('pre')->insert($data);
                Session::put('exception', 'Well Done!');
                return Redirect::to('/csspretestresult');
           
    }

    // end pre// add edit delete


    // start post// add edit delete
    public function cssposttestresult()
    {
        return view('CSSPAGE.CssAdmin.cssposttestresult');
    }
    public function postupdate( $post_id )
    {
        $posts_desc_edit=DB::table('post')
                ->select('*')
                ->where('post_id',$post_id)
                ->first();
        $manage_desc_edit=view('CSSPAGE.CssAdmin.postupdate')
                ->with('posts_desc_edit',$posts_desc_edit);
        return view('layouts.css')
                ->with('postupdate/'.$post_id, $manage_desc_edit);
    }
    public function postupdates( Request $request, $post_id )
    {
        $data = array();
        $data['post_traineename'] = $request->post_traineename;
        $data['post_result'] = $request->post_result;
       
    
        DB::table('post')
                ->where('post_id', $post_id)
                ->update($data);
            Session::put('message', 'Well donee');
            return Redirect::to('cssposttestresult/');
    }   
    public function postdelete( $post_id )
    {
      

        DB::table('post')
                ->where('post_id',$post_id)
                ->delete();

                return Redirect::to('/cssposttestresult');
    }
    public function postadd()
    {
        return view('CSSPAGE.CssAdmin.postadd');
    }
    public function addpostfunctions(Request $request)
    {
                $data = array();
                $data['post_traineename'] = $request->post_traineename;
                $data['post_result'] = $request->post_result;
               

                DB::table('post')->insert($data);
                Session::put('exception', 'Well Done!');
                return Redirect::to('/cssposttestresult');
           
    }

   // end post// add edit delete

    
    public function assresult()
    {
        return view('CSSPAGE.CssAdmin.assresult');
    }
    public function assresultupdate( $assresult_id )
    {
        $asss_desc_edit=DB::table('assresult')
                ->select('*')
                ->where('assresult_id',$assresult_id)
                ->first();
        $manage_desc_edit=view('CSSPAGE.CssAdmin.assresultupdate')
                ->with('asss_desc_edit',$asss_desc_edit);
        return view('layouts.css')
                ->with('assresultupdate/'.$assresult_id, $manage_desc_edit);
    }
    public function assresultupdates( Request $request, $assresult_id )
    {
        $data = array();
        $data['assresult_traineename'] = $request->assresult_traineename;
        $data['assresult_result'] = $request->assresult_result;
       
    
        DB::table('assresult')
                ->where('assresult_id', $assresult_id)
                ->update($data);
            Session::put('message', 'Well donee');
            return Redirect::to('assresult/');
    }   
    public function assresultdelete( $assresult_id )
    {
      

        DB::table('assresult')
                ->where('assresult_id',$assresult_id)
                ->delete();

                return Redirect::to('/assresult');
    }
    public function assresultadd()
    {
        return view('CSSPAGE.CssAdmin.assresultadd');
    }
    public function addassresultfunctions(Request $request)
    {
                $data = array();
                $data['assresult_traineename'] = $request->assresult_traineename;
                $data['assresult_result'] = $request->assresult_result;
               

                DB::table('assresult')->insert($data);
                Session::put('exception', 'Well Done!');
                return Redirect::to('/assresult');
           
    }
    public function addAdminAcc()
    {
        return view('CSSPAGE.Register.addAdminAcc');
    }
    public function adminAcc()
    {
        return view('CSSPAGE.Register.adminAcc');
    }
    public function cssregister(Request $request)
    {
        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['first_name'] = $request->first_name;
        $data['middle_name'] = $request->middle_name;
        $data['last_name'] = $request->last_name;
        $data['password'] = Hash::make($request->password);
       
        
        DB::table('c_s_s_s')->insert($data);
       
        return Redirect::to('/addAdminAcc');
    }
    public function deleteCssAdmin(Request $request, $id)
    {
        DB::table('c_s_s_s')
            ->where('id', $id)
            ->delete();
            return Redirect::to('/addAdminAcc');
    }

    public function addTraineeAcc()
    {
        return view('CSSPAGE.Register.addTraineeAcc');
    }
    public function traineeAcc()
    {
        return view('CSSPAGE.Register.traineeAcc');
    }
    public function csstrainee(Request $request)
    {
        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['first_name'] = $request->first_name;
        $data['middle_name'] = $request->middle_name;
        $data['last_name'] = $request->last_name;
        $data['password'] = Hash::make($request->password);
       
        
        DB::table('trainees')->insert($data);
       
        return Redirect::to('/addTraineeAcc');
      
    }
    public function deleteTraineeAdmin(Request $request, $id)
    {
        DB::table('trainees')
            ->where('id', $id)
            ->delete();

            return Redirect::to('/addTraineeAcc');
        
    }

}