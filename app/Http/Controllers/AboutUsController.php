<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

use Session;
session_start();


class AboutUsController extends Controller
{
    public function viewAlumnipeps( $alumnipeps_id )
    {
        $quali_desc_edit=DB::table('alumnipeps')
                ->join('qualification', 'qualification.qualification_id', 'alumnipeps.qualification_id')
                ->select('*')
                ->where('alumnipeps_id',$alumnipeps_id)
                ->first();
        $manage_desc_edit=view('About Us.viewAlumnipeps')
                ->with('quali_desc_edit',$quali_desc_edit); 
        return view('layoutEvery')
                ->with('viewAlumnipeps/'.$alumnipeps_id, $manage_desc_edit);
       
    }
    public function missionvision()
    {
        return view('About Us.mission&vision');
    }
    public function home()
    {
        return view('home');
    }
    public function locationmap()
    {
        return view('About Us.locationmap');
    }
    public function structure()
    {
        return view('About Us.structure');
    }
    public function cbprograms()
    {
        return view('ProgramServices.cbprograms');
    }
    public function news()
    {
        return view('About Us.news');
    }
    public function reservation()
    {
        return view('Reservation.reservation');
    }
    public function eaddReservation(Request $request)
    {
        $data = array();
        $data['res_fname'] = $request->res_fname;
        $data['res_mname'] = $request->res_mname;
        $data['res_lname'] = $request->res_lname;
        $data['res_barangay'] = $request->res_barangay;
        $data['res_city'] = $request->res_city;
        $data['res_province'] = $request->res_province;
        $data['res_region'] = $request->res_region;
        $data['res_district'] = $request->res_district;
        $data['res_email'] = $request->res_email;
        $data['res_contact'] = $request->res_contact;
        $data['res_nationality'] = $request->res_nationality;
        $data['res_gender'] = $request->res_gender;
        $data['res_civilstat'] = $request->res_civilstat;
        $data['res_employstat'] = $request->res_employstat;
        $data['res_educational'] = $request->res_educational;
        $data['res_birthdate'] = $request->res_birthdate;
        $data['res_age'] = $request->res_age;
        $data['res_birthcity'] = $request->res_birthcity;
        $data['res_birthprov'] = $request->res_birthprov;
        $data['res_birthreg'] = $request->res_birthreg;
        $data['registeredDate'] = $request->registeredDate;
        $data['qualification_id'] = $request->qualification_id;

       

        DB::table('reservation')->insert($data);
        Session::put('exception', 'Well Done!');
        return Redirect::to('/reservation');
    }
    public function requirements()
    {
        return view('Requirements.requirements');
    }
    
   
}
