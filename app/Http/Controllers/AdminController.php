<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Merit;
use App\Student;
use App\ApprovedAdmission;
use App\Admin;
use DB;

class AdminController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth:admin');
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
    public function index(){
      $data = DB::table('students')
              ->join('admissions' , 'admissions.stu_id' , '=' , 'students.id')
              ->join('universities' , 'universities.id' , '=' , 'admissions.uni_id')
              ->select('students.name','universities.name', 'universities.admission_marks',
              'admissions.created_at', 'admissions.transcript','admissions.passport',
              'admissions.checked', 'admissions.id')
              ->get();
      return view('/admindashboard',compact('data'));
    }

    public function merit(){
      return view('/adminmerit');
    }

    public function save(Request $request){
      $merit = new Merit;
      $merit->roll_no = request('roll_no');
      $merit->name = request('name');
      $merit->father_name = request('fathername');
      $merit->obtained_marks = request('obtainedmark');
      $merit->total_marks = request('totalmark');

      $merit->save();
      return view('/adminmerit')->with('success' , 'Information saved successfully');
    }

    public function approveadmission(Request $request){
      $approve = new ApprovedAdmission;
      $approve->admin_id = 1;
      $approve->adms_id = request('admission_id');
      $approve->approved = '1';

      $approve->save();

      /*$approveddata = ApprovedAdmission::all();*/
      return redirect()->back()->with('success' , 'successfully approved');
    }
}
