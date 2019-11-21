<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Student;
use App\User;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      $stu_id=Auth::id();
      $students=Student::find($stu_id);
      if($students){
           return view('showprofile', compact('students'));
      } else {
           return view('profile');
      }
    }

    public function save(Request $request)
    {
      $this->validate($request, [
        'profileimg' => 'required',
        'profileimg.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
      ]);

      if($request->hasfile('profileimg')){
        $image = $request->file('profileimg');

        $name=$image->getClientOriginalName();
        $image->move(public_path().'/images/', $name);
        $profileimg = $name;
      }

      $profile= new Student;
      $profile->name = request('name');
      $profile->dateofbirth = request('dob');
      $profile->phone = request('phoneno');
      $profile->address = request('address');
      $profile->gender = request('gender');

      $profile->photo = $profileimg;

      $profile->save();

      $stu_id=Auth::id();
      $students=Student::find($stu_id);
     return view('showprofile',compact('students'))->with('success', 'Your personal information has been successfully added');
    }
}
