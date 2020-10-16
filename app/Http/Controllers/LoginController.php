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


class LoginController extends Controller
{

        use AuthenticatesUsers;
        public function __construct()
        {
            $this->middleware('auth');
        }
        public function deleteAlumni( $alumnipeps_id )
        {
                DB::table('alumnipeps')
                        ->where('alumnipeps_id',$alumnipeps_id)
                        ->delete();

                return Redirect::to('/alumnipeps');
        }
        public function eupdateAlumni( Request $request, $alumnipeps_id ) 
        {
                $data = array();
                $data['alumnipeps_firstname'] = $request->alumnipeps_firstname;
                $data['alumnipeps_lastname'] = $request->alumnipeps_lastname;
                $data['alumnipeps_middlename'] = $request->alumnipeps_middlename;
                $data['alumnipeps_dategrad'] = $request->alumnipeps_dategrad;
                $data['alumnipeps_batch'] = $request->alumnipeps_batch;
                $data['qualification_id'] = $request->qualification_id;
                $image=$request->file('alumnipeps_image');
        
               
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
                                $data['alumnipeps_image']=$image_url;

                                DB::table('alumnipeps')
                                        ->where('alumnipeps_id', $alumnipeps_id)
                                        ->update($data);
                                Session::put('exception','Well done!');
                                return Redirect::to('/alumnipeps');
                        }
                }
                $data['image']=$image_url;

                DB::table('alumnipeps')
                        ->where('alumnipeps_id', $alumnipeps_id)
                        ->update($data);
                Session::put('exception','Well done!');
                return Redirect::to('/alumnipeps');
        }
        public function updateAlumni( $alumnipeps_id )
        {
                $quali_desc_edit=DB::table('alumnipeps')
                        ->select('*')
                        ->where('alumnipeps_id',$alumnipeps_id)
                        ->first();
                $manage_desc_edit=view('alumni.updateAlumni')
                        ->with('quali_desc_edit',$quali_desc_edit);
                return view('layouts.app')
                        ->with('updateAlumni/'.$alumnipeps_id, $manage_desc_edit);
        }
        public function eaddAlumni(Request $request)     
        {
                $data = array();
                $data['alumnipeps_firstname'] = $request->alumnipeps_firstname;
                $data['alumnipeps_lastname'] = $request->alumnipeps_lastname;
                $data['alumnipeps_middlename'] = $request->alumnipeps_middlename;
                $data['alumnipeps_dategrad'] = $request->alumnipeps_dategrad;
                $data['alumnipeps_batch'] = $request->alumnipeps_batch;
                $data['qualification_id'] = $request->qualification_id;
                $image=$request->file('alumnipeps_image');
        
               
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
                                $data['alumnipeps_image']=$image_url;

                                DB::table('alumnipeps')->insert($data);
                                Session::put('exception','Well done!');
                                return Redirect::to('/alumnipeps');
                        }
                }
                $data['image']=$image_url;

                DB::table('alumnipeps')->insert($data);
                Session::put('exception','Well done!');
                return Redirect::to('/alumnipeps');
        }
        public function addAlumni()
        {
                return view('alumni.addAlumni');
        }
        public function alumnipeps()
        {
                return view('alumni.alumnipeps');
        }
        public function savequali(Request $request)
        {
                $data = array();
                $data['qualification_title'] = $request->qualification_title;
                $data['qualification_no_hours'] = $request->qualification_no_hours;
                $data['qualification_date_of_reg'] = $request->qualification_date_of_reg;
                $data['qualification_cptr'] = $request->qualification_cptr;
        
                DB::table('qualification')->insert($data);
                Session::put('exception', 'Well Done!');
                return Redirect::to('/userhome');
        }

        public function addquali(Request $request)
        {
                return view('Login.addquali');
        }

        public function saveskill(Request $request)
        {
                $data = array();
                $data['skills_title'] = $request->skills_title;
                $data['skills_no_hours'] = $request->skills_no_hours;
                $data['skills_date_of_reg'] = $request->skills_date_of_reg;
                $data['skills_cptr'] = $request->skills_cptr;
        
                DB::table('skills')->insert($data);
                Session::put('exception', 'Well Done!');
                return Redirect::to('/userhome');
        }

        public function addskill(Request $request)
        {
                return view('Login.addskill');
        }

    public function updateQualification( Request $request, $skills_id )
    {
        $data = array();
        $data['skills_title'] = $request->skills_title;
        $data['skills_no_hours'] = $request->skills_no_hours;
        $data['skills_date_of_reg'] = $request->skills_date_of_reg;
        $data['skills_cptr'] = $request->skills_cptr;
       
        
        DB::table('skills')
                ->where('skills_id', $skills_id)
                ->update($data);
            Session::put('message', 'Well donee');
            return Redirect::to('userhome/');
    }
    public function updateSkills( Request $request, $qualification_id )
    {
        $data = array();
        $data['qualification_title'] = $request->qualification_title;
        $data['qualification_no_hours'] = $request->qualification_no_hours;
        $data['qualification_date_of_reg'] = $request->qualification_date_of_reg;
        $data['qualification_cptr'] = $request->qualification_cptr;
       
        
        DB::table('qualification')
                ->where('qualification_id', $qualification_id)
                ->update($data);
            Session::put('message', 'Well donee');
            return Redirect::to('userhome/');
    }
    public function logout()
    {
      Session::put('users_username',null);
      Session::put('users_id',null);  
      

      return Redirect::to('/login');
    }
   
    public function userhome()
    {
        $all_qualification_info=DB::table('qualification')
                ->get();

        $manage_qualification=view('Login.userhome')
                ->with('all_qualification_info', $all_qualification_info);

        return view('layoutForhomeedit')
                ->with('userhome',$manage_qualification);
    }
    
    public function userhomeedit( $skills_id )
    {
        $quali_desc_edit=DB::table('skills')
                ->select('*')
                ->where('skills_id',$skills_id)
                ->first();
        $manage_desc_edit=view('Login.userhomeedit')
                ->with('quali_desc_edit',$quali_desc_edit);
        return view('layoutForhomeedit')
                ->with('userhomeedit/'.$skills_id, $manage_desc_edit);
    }

    public function userhomeeditt( $qualification_id )
    {
        $skills_desc_edit=DB::table('qualification')
                ->select('*')
                ->where('qualification_id',$qualification_id)
                ->first();
        $manage_desc_edit=view('Login.userhomeeditt')
                ->with('skills_desc_edit',$skills_desc_edit);
        return view('layoutForhomeedit')
                ->with('userhomeeditt/'.$qualification_id, $manage_desc_edit);

        

    }

    public function qualidelete( $qualification_id )
    {
        

        DB::table('qualification')
                ->where('qualification_id',$qualification_id)
                ->delete();

                return Redirect::to('/userhome');

    }

    public function skilldelete( $skills_id )
    {
      

        DB::table('skills')
                ->where('skills_id',$skills_id)
                ->delete();

                return Redirect::to('/userhome');

    }

    public function Login()
    {
        return view('Login.login');
    }
    public function userhomepage()
    {
        return view('Login.userhomepage');
    }
    public function usersLogin(Request $request)
    {
        $username=$request->users_username;
        $password=md5($request->users_password);
        $result = DB::table('users')
            ->where('users_username',$username)
            ->where('users_password',$password)
            ->first();

        if($result)
        {
            Session::put('users_username',$result->users_username);
            Session::put('users_id', $result->users_id);
                return Redirect::to('/userhomepage');
        }
        else
        {
            Session::put('exception','Warning! ');
                    return Redirect::to('/login');
        }
    }

    
  
    public function editassessor()
    {
        return view('EditHome.editassessor');
    }
   
   


// start skill// add edit delete
    public function editskills()
    {
        return view('EditHome.editskills');
    } 
    

    public function editskillsupdate( $skills_id )
    {
        $quali_desc_edit=DB::table('skills')
                ->select('*')
                ->where('skills_id',$skills_id)
                ->first();
        $manage_desc_edit=view('Login.editskillsupdate')
                ->with('quali_desc_edit',$quali_desc_edit);
        return view('layouts.app')
                ->with('editskillsupdate/'.$skills_id, $manage_desc_edit);
    }
    public function editskillsupdates( Request $request, $skills_id )
    {
        $data = array();
        $data['skills_title'] = $request->skills_title;
        $data['skills_no_hours'] = $request->skills_no_hours;
        $data['skills_date_of_reg'] = $request->skills_date_of_reg;
        $data['skills_cptr'] = $request->skills_cptr;
       
        
        DB::table('skills')
                ->where('skills_id', $skills_id)
                ->update($data);
            Session::put('message', 'Well donee');
            return Redirect::to('editskills/');
    }
    public function editskilldelete( $skills_id )
    {
      

        DB::table('skills')
                ->where('skills_id',$skills_id)
                ->delete();

                return Redirect::to('/editskills');
    }
    public function addskillupdate(Request $request)
    {
            return view('Login.addskillupdate');
    }
    public function addskillsfunction(Request $request)
    {
            return view('Login.addskillsfunction');
    }
    public function addskillsfunctions(Request $request)
    {
                $data = array();
                $data['skills_title'] = $request->skills_title;
                $data['skills_no_hours'] = $request->skills_no_hours;
                $data['skills_date_of_reg'] = $request->skills_date_of_reg;
                $data['skills_cptr'] = $request->skills_cptr;

                DB::table('skills')->insert($data);
                Session::put('exception', 'Well Done!');
                return Redirect::to('/editskills');
           
    }
    // end skill// add edit delete

    // start quali// add edit delete
    public function editquali()
    {
        return view('EditHome.editquali');
    }
    public function editqualiupdate( $qualification_id )
    {
        $skills_desc_edit=DB::table('qualification')
                ->select('*')
                ->where('qualification_id',$qualification_id)
                ->first();
        $manage_desc_edit=view('editQualification.editqualiupdate')
                ->with('skills_desc_edit',$skills_desc_edit);
        return view('layouts.app')
                ->with('editqualiupdate/'.$qualification_id, $manage_desc_edit);
    }
    public function editqualiupdates( Request $request, $qualification_id )
    {
        $data = array();
        $data['qualification_title'] = $request->qualification_title;
        $data['qualification_no_hours'] = $request->qualification_no_hours;
        $data['qualification_date_of_reg'] = $request->qualification_date_of_reg;
        $data['qualification_cptr'] = $request->qualification_cptr;
 
       
        
        DB::table('qualification')
                ->where('qualification_id', $qualification_id)
                ->update($data);
            Session::put('message', 'Well donee');
            return Redirect::to('editquali/');
    }   
    public function editqualidelete( $qualification_id )
    {
      

        DB::table('qualification')
                ->where('qualification_id',$qualification_id)
                ->delete();

                return Redirect::to('/editquali');
    }
    public function addqualiupdate(Request $request)
    {
            return view('editQualification.addqualiupdate');
    }
    public function addqualifunction(Request $request)
    {
            return view('editQualification.addqualifunction');
    }
    public function addqualifunctions(Request $request)
    {
                $data = array();
                $data['qualification_title'] = $request->qualification_title;
                $data['qualification_no_hours'] = $request->qualification_no_hours;
                $data['qualification_date_of_reg'] = $request->qualification_date_of_reg;
                $data['qualification_cptr'] = $request->qualification_cptr;


                DB::table('qualification')->insert($data);
                Session::put('exception', 'Well Done!');
                return Redirect::to('/editquali');
           
    }
    // end quali// add edit delete

    // start accass// add edit delete
    public function editaccass()
    {
        return view('EditHome.editaccass');
    }
    public function editaccupdate( $accrediredassessment_id )
    {
        $accass_desc_edit=DB::table('accrediredassessment')
                ->select('*')
                ->where('accrediredassessment_id',$accrediredassessment_id)
                ->first();
        $manage_desc_edit=view('editAccreditedAssessment.editaccupdate')
                ->with('accass_desc_edit',$accass_desc_edit);
        return view('layouts.app')
                ->with('editaccupdate/'.$accrediredassessment_id, $manage_desc_edit);
    }
    public function editaccupdates( Request $request, $accrediredassessment_id )
    {
        $data = array();
        $data['accrequali'] = $request->accrequali;
        $data['accrediredassessment_acc_no'] = $request->accrediredassessment_acc_no;
        $data['accrediredassessment_date_of_acc'] = $request->accrediredassessment_date_of_acc;
        $data['accrediredassessment_date_of_exp'] = $request->accrediredassessment_date_of_exp;
       
        
        DB::table('accrediredassessment')
                ->where('accrediredassessment_id', $accrediredassessment_id)
                ->update($data);
            Session::put('message', 'Well donee');
            return Redirect::to('editaccass/');
    }
    public function editaccdelete( $accrediredassessment_id )
    {
      

        DB::table('accrediredassessment')
                ->where('accrediredassessment_id',$accrediredassessment_id)
                ->delete();

                return Redirect::to('/editaccass');
    }
    public function addaccupdate(Request $request)
    {
            return view('editAccreditedAssessment.addaccupdate');
    }
    public function addaccfunction(Request $request)
    {
            return view('editAccreditedAssessment.addaccfunction');
    }
    public function addaccfunctions(Request $request)
    {
                $data = array();
                $data['accrequali'] = $request->accrequali;
                $data['accrediredassessment_acc_no'] = $request->accrediredassessment_acc_no;
                $data['accrediredassessment_date_of_acc'] = $request->accrediredassessment_date_of_acc;
                $data['accrediredassessment_date_of_exp'] = $request->accrediredassessment_date_of_exp;

                DB::table('accrediredassessment')->insert($data);
                Session::put('exception', 'Well Done!');
                return Redirect::to('/editaccass');
           
    }
    // end accass// add edit delete

    // start schedule// add edit delete
    public function editschedule()
    {
        return view('EditHome.editschedule');
    }
    public function editschedupdate( $schedule_id )
    {
        $sched_desc_edit=DB::table('schedule')
                ->select('*')
                ->where('schedule_id',$schedule_id)
                ->first();
        $manage_desc_edit=view('editSchedule.editschedupdate')
                ->with('sched_desc_edit',$sched_desc_edit);
        return view('layouts.app')
                ->with('editschedupdate/'.$schedule_id, $manage_desc_edit);
    }
    public function editschedupdates( Request $request, $schedule_id )
    {
        $data = array();
        $data['schedule_date'] = $request->schedule_date;
        $data['qualification_id'] = $request->qualification_id;
        $data['schedule_no_of_candidates'] = $request->schedule_no_of_candidates;
        $data['assessor_id'] = $request->assessor_id;
       
        
        DB::table('schedule')
                ->where('schedule_id', $schedule_id)
                ->update($data);
            Session::put('message', 'Well donee');
            return Redirect::to('/editschedule');
    }
    public function editscheddelete( $schedule_id )
    {
      
        DB::table('schedule')
                ->where('schedule_id',$schedule_id)
                ->delete();

                return Redirect::to('/editschedule');
    }
    public function addschedupdate(Request $request)
    {
            return view('editSchedule.addschedupdate');
    }
    public function addschedfunction(Request $request)
    {
            return view('editSchedule.addschedfunction');
    }
    public function addschedfunctions(Request $request)
    {
                $data = array();
                $data['schedule_date'] = $request->schedule_date;
                $data['qualification_id'] = $request->qualification_id;
                $data['schedule_no_of_candidates'] = $request->schedule_no_of_candidates;
                $data['assessor_id'] = $request->assessor_id;

                DB::table('schedule')->insert($data);
                Session::put('exception', 'Well Done!');
                return Redirect::to('/editschedule');
           
    }

        // end schedule// add edit delete editresult

      // start result// add edit delete
      public function editresult()
      {
          return view('EditHome.editresult');
      }
    public function editresdupdate( $result_id )
    {
        $res_desc_edit=DB::table('result')
                ->select('*')
                ->where('result_id',$result_id)
                ->first();
        $manage_desc_edit=view('editResult.editresdupdate')
                ->with('res_desc_edit',$res_desc_edit);
        return view('layoutAdmin')
                ->with('editresdupdate/'.$result_id, $manage_desc_edit);
    }
    public function editresdupdates( Request $request, $result_id )
    {
        $data = array();
        $data['result_candidate'] = $request->result_candidate;
        $data['result_qualification'] = $request->result_qualification;
        $data['result_dateass'] = $request->result_dateass;
        $data['result_result'] = $request->result_result;
       
        
        DB::table('result')
                ->where('result_id', $result_id)
                ->update($data);
            Session::put('message', 'Well donee');
            return Redirect::to('/editresult');
    }
    public function editresddelete( $result_id )
    {
      
        DB::table('schedule')
                ->where('result_id',$result_id)
                ->delete();

                return Redirect::to('/editresult');
    }
    public function addresupdate(Request $request)
    {
            return view('editResult.addresupdate');
    }
    public function addresfunction(Request $request)
    {
            return view('editResult.addresfunction');
    }
    public function addresfunctions(Request $request)
    {
                $data = array();
                        $data['trainee_name'] = $request->trainee_name;
                        $data['trainee_middlename'] = $request->trainee_middlename;
                        $data['trainee_lastname'] = $request->trainee_lastname;
                        $data['qualification_id'] = $request->qualification_id;
                        $data['assessment_pof'] = $request->assessment_pof;
                        $data['assessment_cn'] = $request->assessment_cn;
                        $data['assessor_id'] = $request->assessor_id;
                        $data['assessment_sched_taken'] = $request->assessment_sched_taken;

                DB::table('assessment')->insert($data);
                Session::put('exception', 'Well Done!');
                return Redirect::to('/editresult');
           
    }

        // end schedule// add edit delete editresult   
    public function editresupdate(Request $request, $assessment_id)
    {
        $res_desc_edit=DB::table('assessment')
                ->select('*')
                ->where('assessment_id',$assessment_id)
                ->first();
        $manage_desc_edit=view('AssessmentResult.resultUpdate')
                ->with('res_desc_edit',$res_desc_edit);
        return view('layouts.app')
                ->with('resultUpdate/'.$assessment_id, $manage_desc_edit);

    }
    public function editresupdates(Request $request, $assessment_id)
    {
       
        $data = array();
        $data['trainee_name'] = $request->trainee_name;
        $data['trainee_middlename'] = $request->trainee_middlename;
        $data['trainee_lastname'] = $request->trainee_lastname;
        $data['qualification_id'] = $request->qualification_id;
        $data['assessment_pof'] = $request->assessment_pof;
        $data['assessment_cn'] = $request->assessment_cn;
        $data['assessor_id'] = $request->assessor_id;
        $data['assessment_sched_taken'] = $request->assessment_sched_taken;
       
        
        DB::table('assessment')
                ->where('assessment_id', $assessment_id)
                ->update($data);
            Session::put('message', 'Well donee');
            return Redirect::to('/editresult');
    }
    public function editresdelete( $assessment_id)
    {
        DB::table('assessment')
                ->where('assessment_id',$assessment_id)
                ->delete();

        return Redirect::to('/editresult');
       
    }

    public function addAssessor( Request $request)
    {
        return view('Assessor.addAssessor');
    }

    public function addAssessorFunc( Request $request)
    {
        $data = array();
        $data['assessor_name'] = $request->assessor_name;
        $data['assessor_middlename'] = $request->assessor_middlename;
        $data['assessor_lastname'] = $request->assessor_lastname;
        $data['assessor_gender'] = $request->assessor_gender;
        $data['assessor_age'] = $request->assessor_age;
        $data['assessor_date_accquired'] = $request->assessor_date_accquired;
        $data['assessor_expiration_accredited'] = $request->assessor_expiration_accredited;
        $data['assessor_qualification'] = $request->assessor_qualification;

        DB::table('assessor')->insert($data);
        Session::put('exception', 'Well Done!');
        return Redirect::to('/editassessor');
    }
  
    public function updateAssessor( Request $request, $assessor_id)
    {
        $res_desc_edit=DB::table('assessor')
                ->select('*')
                ->where('assessor_id',$assessor_id)
                ->first();
        $manage_desc_edit=view('Assessor.assessorUpdate')
                ->with('res_desc_edit',$res_desc_edit);
        return view('layouts.app')
                ->with('assessorUpdate/'.$assessor_id, $manage_desc_edit);

    }
    public function updateAssessors( Request $request, $assessor_id)
    {
        $data = array();
        $data['assessor_name'] = $request->assessor_name;
        $data['assessor_middlename'] = $request->assessor_middlename;
        $data['assessor_lastname'] = $request->assessor_lastname;
        $data['assessor_gender'] = $request->assessor_gender;
        $data['assessor_age'] = $request->assessor_age;
        $data['assessor_date_accquired'] = $request->assessor_date_accquired;
        $data['assessor_expiration_accredited'] = $request->assessor_expiration_accredited;
        $data['assessor_qualification'] = $request->assessor_qualification;
       
        
        DB::table('assessor')
                ->where('assessor_id', $assessor_id)
                ->update($data);
            Session::put('message', 'Well donee');
            return Redirect::to('/editassessor');

    }
    public function deleteAssessor( $assessor_id)
    {
        DB::table('assessor')
                ->where('assessor_id',$assessor_id)
                ->delete();

        return Redirect::to('/editassessor');
       
    }
}
