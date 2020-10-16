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


class OthersController extends Controller
{
     use AuthenticatesUsers;
    public function __construct()
    {
        $this->middleware('auth');
    }
    
     public function viewReserved( $res_id )
    {
        $reservation_all=DB::table('reservation')
                ->join('qualification', 'qualification.qualification_id', 'reservation.qualification_id')
                ->where('res_id', $res_id)
                ->first();
        $manage_desc_edit=view('EditHome.viewReserved')
                ->with('reservation_all',$reservation_all);
        return view('layouts.app')
                ->with('viewReserved', $manage_desc_edit);
    }
    public function resDelete( $res_id )
    {
        DB::table('reservation')
                ->where('res_id',$res_id)
                ->delete();

                return Redirect::to('/resList');
    }
    public function resList()
    {
        $reservation_all=DB::table('reservation')
                ->get();
        $manage_desc_edit=view('EditHome.resList')
                ->with('reservation_all',$reservation_all);
        return view('layouts.app')
                ->with('resList', $manage_desc_edit);
    }
    public function deleteallnau( )
    {
        DB::table('news')
                ->delete();
        return Redirect::to('/nau');
    }
    public function deletenau( $news_id )
    {
        DB::table('news')
                ->where('news_id',$news_id)
                ->delete();
        return Redirect::to('/nau');
    }
    public function eupdatenau(Request $request,$news_id)
    {
        $data = array();
        $data['news_conducted'] = $request->news_conducted;
        $data['news_venue'] = $request->news_venue;
        $data['news_date'] = $request->news_date;
        $data['news_partner'] = $request->news_partner;
        $data['news_oor'] = $request->news_oor;
        $image=$request->file('news_image');

       
        if($image)
        {
                $image_name=Str::random(20);
                $ext=strtolower($image->getClientOriginalExtension());
                $image_full_name=$image_name.'.'.$ext;
                $upload_path='image/';
                $image_url=$upload_path.$image_full_name;
                $success=$image->move($upload_path, $image_full_name);

                if($success)
                {
                        $data['news_image']=$image_url;

                        DB::table('news')
                            ->where('news_id', $news_id)
                            ->update($data);
                        Session::put('exception','Well done!');
                        return Redirect::to('/nau');
                }
        }
        $data['image']=$image_url;

        DB::table('news')
            ->where('news_id', $news_id)
            ->update($data);
        Session::put('exception','Well done!');
        return Redirect::to('/nau');
    }
    public function updatenau( $news_id )
    {
        $quali_desc_edit=DB::table('news')
                ->select('*')
                ->where('news_id',$news_id)
                ->first();
        $manage_desc_edit=view('EditHome.updatenau')
                ->with('quali_desc_edit',$quali_desc_edit);
        return view('layouts.app')
                ->with('updatenau/'.$news_id, $manage_desc_edit);
    }
    public function eaddnau(Request $request)
    {
        $data = array();
        $data['news_conducted'] = $request->news_conducted;
        $data['news_venue'] = $request->news_venue;
        $data['news_date'] = $request->news_date;
        $data['news_partner'] = $request->news_partner;
        $data['news_oor'] = $request->news_oor;
        $image=$request->file('news_image');

       
        if($image)
        {
                $image_name=Str::random(20);
                $ext=strtolower($image->getClientOriginalExtension());
                $image_full_name=$image_name.'.'.$ext;
                $upload_path='image/';
                $image_url=$upload_path.$image_full_name;
                $success=$image->move($upload_path, $image_full_name);

                if($success)
                {
                        $data['news_image']=$image_url;

                        DB::table('news')->insert($data);
                        Session::put('exception','Well done!');
                        return Redirect::to('/nau');
                }
        }
        $data['image']=$image_url;

        DB::table('news')->insert($data);
        Session::put('exception','Well done!');
        return Redirect::to('/nau');
    }
    public function nau()
    {
        return view('EditHome.nau');
    }
    public function addnau()
    {
        return view('EditHome.addnau');
    }






    public function comquali()
    {
        return view('EditHome.comquali');
    }
    public function combasedQuali()
    {
        return view('EditHome.combasedQuali');
    }
    public function addcomsquali(Request $request)
    {
        $data = array();
        $data['com_quali_com_qualititle'] = $request->com_quali_com_qualititle;
        $data['com_quali_no_hours'] = $request->com_quali_no_hours;
        $data['com_quali_cptr'] = $request->com_quali_cptr;
        $data['com_quali_date_of_reg'] = $request->com_quali_date_of_reg;
        $data['com_quali_assessment_no_of_candidate'] = $request->com_quali_assessment_no_of_candidate;

        DB::table('com_quali')->insert($data);
        Session::put('exception', 'Well Done!');
        return Redirect::to('/comquali');
    }
    public function updateComQuali( $com_quali_id )
    {
        $quali_desc_edit=DB::table('com_quali')
                ->select('*')
                ->where('com_quali_id',$com_quali_id)
                ->first();
        $manage_desc_edit=view('EditHome.updateComQuali')
                ->with('quali_desc_edit',$quali_desc_edit);
        return view('layouts.app')
                ->with('updateComQuali/'.$com_quali_id, $manage_desc_edit);
    }
    public function eupdateComQuali(Request $request, $com_quali_id )
    {
        $data = array();
        $data['com_quali_com_qualititle'] = $request->com_quali_com_qualititle;
        $data['com_quali_no_hours'] = $request->com_quali_no_hours;
        $data['com_quali_cptr'] = $request->com_quali_cptr;
        $data['com_quali_date_of_reg'] = $request->com_quali_date_of_reg;
        $data['com_quali_assessment_no_of_candidate'] = $request->com_quali_assessment_no_of_candidate;

        DB::table('com_quali')
            ->where('com_quali_id',$com_quali_id)
            ->update($data);
        Session::put('exception', 'Well Done!');
        return Redirect::to('/comquali');
    }
    public function deleteComQuali(Request $request, $com_quali_id )
    {
        DB::table('com_quali')
                ->where('com_quali_id',$com_quali_id)
                ->delete();
        return Redirect::to('/comquali');
    }

}
