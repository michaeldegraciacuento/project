<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')
    ->name('home')
    ->middleware('auth');

//admintm login
Route::get('/fin/login', 'Auth\AdminFinanceLoginController@showLoginForm')->name('fin.login');
Route::post('/fin/login', 'Auth\AdminFinanceLoginController@login')->name('fin.login.submit');
Route::get('/fin', 'FinanceController@index')->name('fin.dashboard');

//Route::get('/news', 'AboutUsController@news');


Route::get('/linkupdate', 'FinanceController@linkupdate');
Route::get('/addlinkupdate', 'FinanceController@addlinkupdate');
Route::post('/eaddlinkupdate', 'FinanceController@eaddlinkupdate');
Route::get('/updatelinkupdate/{linkupdate_id}', 'FinanceController@updatelinkupdate');
Route::post('/eupdatelinkupdate/{linkupdate_id}', 'FinanceController@eupdatelinkupdate');
Route::get('/deletelinkupdate/{linkupdate_id}', 'FinanceController@deletelinkupdate');

//Route::get('/addmultilinkupdate', 'FinanceController@addmultilinkupdate');
//Route::post('/eaddmultilinkupdate', 'FinanceController@eaddmultilinkupdate');




// SKILLS
Route::get('/editskills', 'LoginController@editskills');
Route::get('/editskillsupdate/{skills_id}', 'LoginController@editskillsupdate');
Route::post('/editskillsupdates/{skills_id}', 'LoginController@editskillsupdates');
Route::get('/editskilldelete/{skills_id}', 'LoginController@editskilldelete');
Route::get('/addskillsfunction', 'LoginController@addskillsfunction');
Route::post('/addskillsfunctions', 'LoginController@addskillsfunctions');

// Qualification
Route::get('/editquali', 'LoginController@editquali');
Route::get('/editqualiupdate/{qualification_id}', 'LoginController@editqualiupdate');
Route::post('/editqualiupdates/{qualification_id}', 'LoginController@editqualiupdates');
Route::get('/editqualidelete/{qualification_id}', 'LoginController@editqualidelete');
Route::get('/addqualiupdate', 'LoginController@addqualiupdate');
Route::get('/addqualifunction', 'LoginController@addqualifunction');
Route::post('/savequalifunction', 'LoginController@savequalifunction');
Route::post('/addqualifunctions', 'LoginController@addqualifunctions');

// Assessment Result
Route::get('/editresult', 'LoginController@editresult');
Route::get('/editresupdate/{assessment_id}', 'LoginController@editresupdate');
Route::post('/editresupdates/{assessment_id}', 'LoginController@editresupdates');
Route::get('/editresdelete/{assessment_id}', 'LoginController@editresdelete');
Route::get('/addresupdate', 'LoginController@addresupdate');
Route::get('/addresfunction', 'LoginController@addresfunction');
Route::post('/saveresfunction', 'LoginController@saveresfunction');
Route::post('/addresfunctions', 'LoginController@addresfunctions');

// Accredited Assessor
Route::get('/editassessor', 'LoginController@editassessor');
Route::get('/addAssessor', 'LoginController@addAssessor');
Route::post('/addAssessorFunc', 'LoginController@addAssessorFunc');
Route::get('/updateAssessor/{assessor_id}', 'LoginController@updateAssessor');
Route::post('/updateAssessors/{assessor_id}', 'LoginController@updateAssessors');
Route::get('/deleteAssessor/{assessor_id}', 'LoginController@deleteAssessor');

// Schedule Assessment

Route::get('/editschedule', 'LoginController@editschedule');
Route::get('/editschedupdate/{schedule_id}', 'LoginController@editschedupdate');
Route::post('/editschedupdates/{schedule_id}', 'LoginController@editschedupdates');
Route::get('/editscheddelete/{schedule_id}', 'LoginController@editscheddelete');
Route::get('/addschedupdate', 'LoginController@addschedupdate');
Route::get('/addschedfunction', 'LoginController@addschedfunction');
Route::post('/saveschedfunction', 'LoginController@saveschedfunction');
Route::post('/addschedfunctions', 'LoginController@addschedfunctions');

// Accredited Assessment

Route::get('/editaccass', 'LoginController@editaccass');
Route::get('/editaccupdate/{accrediredassessment_id}', 'LoginController@editaccupdate');
Route::post('/editaccupdates/{accrediredassessment_id}', 'LoginController@editaccupdates');
Route::get('/editaccdelete/{accrediredassessment_id}', 'LoginController@editaccdelete');
Route::get('/addaccupdate', 'LoginController@addaccupdate');
Route::get('/addaccfunction', 'LoginController@addaccfunction');
Route::post('/saveaccfunction', 'LoginController@saveaccfunction');
Route::post('/addaccfunctions', 'LoginController@addaccfunctions');

// RTC ALUMNI

Route::get('/alumnipeps', 'LoginController@alumnipeps');
Route::get('/addAlumni', 'LoginController@addAlumni');
Route::post('/eaddAlumni', 'LoginController@eaddAlumni');
Route::get('/updateAlumni/{alumnipeps_id}', 'LoginController@updateAlumni');
Route::post('/eupdateAlumni/{alumnipeps_id}', 'LoginController@eupdateAlumni');
Route::get('/deleteAlumni/{alumnipeps_id}', 'LoginController@deleteAlumni');
Route::get('/viewAlumnipeps/{alumnipeps_id}', 'AboutUsController@viewAlumnipeps');



// Com Qualification
Route::get('/cbprograms', 'AboutUsController@cbprograms');

Route::get('/comquali', 'OthersController@comquali');
Route::get('/combasedQuali', 'OthersController@combasedQuali');
Route::post('/addcomsquali', 'OthersController@addcomsquali');
Route::get('/updateComQuali/{com_quali_id}', 'OthersController@updateComQuali');
Route::post('/eupdateComQuali/{com_quali_id}', 'OthersController@eupdateComQuali');
Route::get('/deleteComQuali/{com_quali_id}', 'OthersController@deleteComQuali');

// NEWS

Route::get('/news', 'AboutUsController@news');
Route::get('/deleteallnau', 'OthersController@deleteallnau');

Route::get('/nau', 'OthersController@nau');
Route::get('/addnau', 'OthersController@addnau');
Route::post('/eaddnau', 'OthersController@eaddnau');
Route::get('/updatenau/{news_id}', 'OthersController@updatenau');
Route::post('/eupdatenau/{news_id}', 'OthersController@eupdatenau');
Route::get('/deletenau/{news_id}', 'OthersController@deletenau');


Route::get('/mission&vision', 'AboutUsController@missionvision');
Route::get('/structure', 'AboutUsController@structure');
Route::get('/locationmap', 'AboutUsController@locationmap');
Route::get('/TVETprograms', 'ProgramsAndServicesController@TVETprograms');
Route::get('/acahome', 'ProgramsAndServicesController@acahome');
Route::get('/centerbasedd', 'ProgramsAndServicesController@centerbasedd');
Route::get('/aca', 'ProgramsAndServicesController@aca');
Route::get('/listaa', 'ProgramsAndServicesController@listaa');
Route::get('/viewar', 'ProgramsAndServicesController@viewar');


Route::get('/transparencyseal', 'TransparencyController@transparencyseal');
Route::get('/citizencharter', 'TransparencyController@citizencharter');
Route::get('/philgepsposting', 'TransparencyController@philgepsposting');
Route::get('/sstories', 'TransparencyController@sstories');
Route::get('/alumni', 'TransparencyController@alumni');
Route::get('/gallery', 'TransparencyController@gallery');

Route::get('/csspage', 'CSSController@csspage');
Route::get('/slidingpicture', 'CSSController@slidingpicture');
Route::get('/accomplishment', 'CSSController@accomplishment');
Route::get('/profile', 'CSSController@profile');
Route::get('/vmo', 'CSSController@vmo');
Route::get('/stories', 'CSSController@stories');
Route::get('/schedules', 'CSSController@schedules');
Route::get('/partners', 'CSSController@partners');





Route::get('/reservation', 'AboutUsController@reservation');
Route::post('/eaddReservation', 'AboutUsController@eaddReservation');
Route::get('/resList', 'OthersController@resList');
Route::get('/resDelete/{res_id}', 'OthersController@resDelete');
Route::get('viewReserved/{res_id}', 'OthersController@viewReserved');
Route::get('/requirements', 'AboutUsController@requirements');



//CSS PAGE LOGIN AND EVERYTHING


// CSS LOGIN


Route::get('/css/login', 'Auth\CssLoginController@showLoginForm')->name('css.login');
Route::post('/css/login', 'Auth\CssLoginController@login')->name('css.login.submit');
Route::get('/css', 'CsssController@index')->name('css.dashboard');


// CSS PAGE SUMPAY

Route::get('/attSheets', 'CSSController@attSheets');
Route::get('/actMatrix', 'CSSController@actMatrix');
Route::get('/achieveSheets', 'CSSController@achieveSheets');
Route::get('/progSheets', 'CSSController@progSheets');
Route::get('/isag', 'CSSController@isag');
Route::get('/irs', 'CSSController@irs');
Route::get('/iar', 'CSSController@iar');
Route::get('/houseSched', 'CSSController@houseSched');
Route::get('/ems', 'CSSController@ems');



Route::get('/csssendlink', 'CsssController@csssendlink');
Route::get('/cssupdatelink/{link_id}', 'CsssController@cssupdatelink');
Route::post('/cssupdatelinks/{link_id}', 'CsssController@cssupdatelinks');
Route::get('/linkdelete/{link_id}', 'CsssController@linkdelete');
Route::get('/cssaddnewlink', 'CsssController@cssaddnewlink');
Route::get('/addlinkfunction', 'CsssController@addlinkfunction');
Route::post('/savelinkfunction', 'CsssController@savelinkfunction');
Route::post('/addlinkfunctions', 'CsssController@addlinkfunctions');




Route::get('/csspretestresult', 'CsssController@csspretestresult');
Route::get('/preupdate/{pre_id}', 'CsssController@preupdate');
Route::post('/preupdates/{pre_id}', 'CsssController@preupdates');
Route::get('/predelete/{pre_id}', 'CsssController@predelete');
Route::get('/preadd', 'CsssController@preadd');
Route::get('/addprefunction', 'CsssController@addprefunction');
Route::post('/saveprefunction', 'CsssController@saveprefunction');
Route::post('/addprefunctions', 'CsssController@addprefunctions');



Route::get('/cssposttestresult', 'CsssController@cssposttestresult');
Route::get('/postupdate/{post_id}', 'CsssController@postupdate');
Route::post('/postupdates/{post_id}', 'CsssController@postupdates');
Route::get('/postdelete/{post_id}', 'CsssController@postdelete');
Route::get('/postadd', 'CsssController@postadd');
Route::get('/addpostfunction', 'CsssController@addpostfunction');
Route::post('/savepostfunction', 'CsssController@savepostfunction');
Route::post('/addpostfunctions', 'CsssController@addpostfunctions');


Route::get('/assresult', 'CsssController@assresult');
Route::get('/assresultupdate/{assresult_id}', 'CsssController@assresultupdate');
Route::post('/assresultupdates/{assresult_id}', 'CsssController@assresultupdates');
Route::get('/assresultdelete/{assresult_id}', 'CsssController@assresultdelete');
Route::get('/assresultadd', 'CsssController@assresultadd');
Route::get('/addassresultfunction', 'CsssController@addassresultfunction');
Route::post('/saveassresultfunction', 'CsssController@saveassresultfunction');
Route::post('/addassresultfunctions', 'CsssController@addassresultfunctions');

Route::get('/assessmentresult', 'CsssController@assessmentresult');

// TM


Route::get('/trainee/login', 'Auth\TraineeLoginController@showLoginForm')->name('trainee.login');
Route::post('/trainee/login', 'Auth\TraineeLoginController@login')->name('trainee.login.submit');
Route::get('/trainee', 'TraineeController@index')->name('trainee.dashboard');



// trainee page

Route::get('/4attSheets', 'TraineeController@attSheets1');
Route::get('/3actMatrix', 'TraineeController@actMatrix1');
Route::get('/2achieveSheets', 'TraineeController@achieveSheets1');
Route::get('/12progSheets', 'TraineeController@progSheets1');
Route::get('/9isag', 'TraineeController@isag1');
Route::get('/8irs', 'TraineeController@irs1');
Route::get('/7iar', 'TraineeController@iar1');
Route::get('/6houseSched', 'TraineeController@houseSched1');
Route::get('/5ems', 'TraineeController@ems1');

Route::get('/14slidingpicture', 'TraineeController@slidingpicture1');
Route::get('/1accomplishment', 'TraineeController@accomplishment1');
Route::get('/11profile', 'TraineeController@profile1');
Route::get('/16vmo', 'TraineeController@vmo1');
Route::get('/15stories', 'TraineeController@stories1');
Route::get('/13schedules', 'TraineeController@schedules1');
Route::get('/10partners', 'TraineeController@partners1');
Route::get('/17csspage', 'TraineeController@csspage1');
Route::get('/assessmentlink', 'TraineeController@assessmentlink');



Route::get('/assessmentresult', 'TraineeController@assessmentresult');
Route::get('/search', 'TraineeController@search');
Route::get('/search1', 'TraineeController@search1');
Route::get('/preresult', 'TraineeController@preresult');
Route::get('/postresult', 'TraineeController@postresult');

Route::get('/cblm', 'TraineeController@cblm');
Route::get('/ems', 'TraineeController@ems');
Route::get('/hs', 'TraineeController@hs');
Route::get('/iar', 'TraineeController@iar');
Route::get('/irs', 'TraineeController@irs');
Route::get('/isag', 'TraineeController@isag');
Route::get('/ctrainingschedule', 'TraineeController@ctrainingschedule');
Route::get('/achievementssheets', 'TraineeController@achievementssheets');
Route::get('/attendancesheets', 'TraineeController@attendancesheets');
Route::get('/activitymatrix', 'TraineeController@activitymatrix');
Route::get('/trainingschedule', 'TraineeController@trainingschedule');
Route::get('/progresssheets', 'TraineeController@progresssheets');


Route::get('/addAdminAcc', 'CsssController@addAdminAcc');
Route::get('/adminAcc', 'CsssController@adminAcc');
Route::post('/cssregister', 'CsssController@cssregister');
Route::get('/deleteCssAdmin/{id}', 'CsssController@deleteCssAdmin');



Route::get('/addTraineeAcc', 'CsssController@addTraineeAcc');
Route::get('/traineeAcc', 'CsssController@traineeAcc');
Route::post('/csstrainee', 'CsssController@csstrainee');
Route::get('/deleteTraineeAdmin/{id}', 'CsssController@deleteTraineeAdmin');







Route::get('/cblm1', 'CSSController@cblm1');
Route::get('/ems1', 'CSSController@ems1');
Route::get('/hs1', 'CSSController@hs1');
Route::get('/iar1', 'CSSController@iar1');
Route::get('/irs1', 'CSSController@irs1');
Route::get('/isag1', 'CSSController@isag1');
Route::get('/ctrainingschedule1', 'CSSController@ctrainingschedule1');
Route::get('/achievementssheets1', 'CSSController@achievementssheets1');
Route::get('/attendancesheets1', 'CSSController@attendancesheets1');
Route::get('/activitymatrix1', 'CSSController@activitymatrix1');
Route::get('/trainingschedule1', 'CSSController@trainingschedule1');
Route::get('/progresssheets1', 'CSSController@progresssheets1');



Route::get('/TMLevel1Homepage', 'TMController@TMLevel1Homepage');
Route::get('/tmhome', 'TMAdminController@tmhome');

Route::get('/TVETTrainerHomepage', 'TMtrainerController@TVETTrainerHomepage');


//tmpretest
Route::get('/tmpretest', 'TMAdminController@tmpretest');
Route::get('/tmpreupdate/{tmpre_id}', 'TMAdminController@tmpreupdate');
Route::post('/tmpreupdates/{tmpre_id}', 'TMAdminController@tmpreupdates');
Route::get('/tmpredelete/{tmpre_id}', 'TMAdminController@tmpredelete');
Route::get('/tmpreadd', 'TMAdminController@tmpreadd');
Route::get('/tmaddprefunction', 'TMAdminController@tmaddprefunction');
Route::post('/tmsaveprefunction', 'TMAdminController@tmsaveprefunction');
Route::post('/tmaddprefunctions', 'TMAdminController@tmaddprefunctions');

//tmposttest
Route::get('/tmposttest', 'TMAdminController@tmposttest');
Route::get('/tmpostupdate/{tmpostid}', 'TMAdminController@tmpostupdate');
Route::post('/tmpostupdates/{tmpostid}', 'TMAdminController@tmpostupdates');
Route::get('/tmpostdelete/{tmpostid}', 'TMAdminController@tmpostdelete');
Route::get('/tmpostadd', 'TMAdminController@tmpostadd');
Route::get('/tmaddpostfunction', 'TMAdminController@tmaddpostfunction');
Route::post('/tmsavepostfunction', 'TMAdminController@tmsavepostfunction');
Route::post('/tmaddpostfunctions', 'TMAdminController@tmaddpostfunctions');
//tmassresult
Route::get('/tmassresult', 'TMAdminController@tmassresult');
Route::get('/tmassresultupdate/{tmassresult_id}', 'TMAdminController@tmassresultupdate');
Route::post('/tmassresultupdates/{tmassresult_id}', 'TMAdminController@tmassresultupdates');
Route::get('/tmassresultdelete/{tmassresult_id}', 'TMAdminController@tmassresultdelete');
Route::get('/tmassresultadd', 'TMAdminController@tmassresultadd');
Route::get('/addtmassresultfunction', 'TMAdminController@addtmassresultfunction');
Route::post('/savetmassresultfunction', 'TMAdminController@savetmassresultfunction');
Route::post('/addtmassresultfunctions', 'TMAdminController@addtmassresultfunctions');

Route::get('/assessmentresult', 'TMAdminController@assessmentresult');




Route::get('/tmac', 'TMtrainerController@tmac');
Route::get('/tmaccomreport', 'TMtrainerController@tmaccomreport');
Route::get('/tmam', 'TMtrainerController@tmam');
Route::get('/tmcb', 'TMtrainerController@tmcb');
Route::get('/tmcblm', 'TMtrainerController@tmcblm');
Route::get('/tmgallery', 'TMtrainerController@tmgallery');
Route::get('/tmias', 'TMtrainerController@tmias');
Route::get('/tmisag', 'TMtrainerController@tmisag');
Route::get('/tmpc', 'TMtrainerController@tmpc');
Route::get('/tmprofile', 'TMtrainerController@tmprofile');
Route::get('/tmtc', 'TMtrainerController@tmtc');
Route::get('/tmtemplates', 'TMtrainerController@tmtemplates');
Route::get('/tmtr', 'TMtrainerController@tmasstmtrresult');
Route::get('/tmvmo', 'TMtrainerController@tmvmo');


//admintm login
Route::get('/tm/login', 'Auth\AdminTMLoginController@showLoginForm')->name('tm.login');
Route::post('/tm/login', 'Auth\AdminTMLoginController@login')->name('tm.login.submit');
Route::get('/tm', 'TMAdminController@index')->name('tm.dashboard');

//tvet login
Route::get('/tvet/login', 'Auth\TvetLoginController@showLoginForm')->name('tvet.login');
Route::post('/tvet/login', 'Auth\TvetLoginController@login')->name('tvet.login.submit');
Route::get('/tvet', 'TMtrainerController@index')->name('tvet.dashboard');

