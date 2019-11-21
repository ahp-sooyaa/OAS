<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Admission;
use App\Student;
use DB;

class AdmissionController extends Controller
{
  public function applied(){
    $stu_id = Auth::id();
    $data = DB::table('students')
            ->join('admissions' , 'admissions.stu_id' , '=' , 'students.id')
            ->join('universities' , 'universities.id' , '=' , 'admissions.uni_id')
            ->select('universities.id','universities.name', 'universities.address',
            'universities.admission_marks','admissions.created_at', 'admissions.checked')
            ->where('students.id', 1)
            ->get();
    if($data){
      return view('applied_universities' , compact('data'))->with('fail', 'Sorry no record of your applied university');
    } else {
      return view('applied_universities' , compact('data'));
    }
  }
}
