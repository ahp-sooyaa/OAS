<?php

namespace App\Http\Controllers;

use App\University;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Admission;

class UniversityController extends Controller
{
    public function index(){
      $unis=University::paginate(4);
        return view('colleges_and_universities', compact('unis'));
    }

    public function search(Request $request){
      $search = $request->get('search');
      $unis=University::where('name', 'Like', '%'.$search.'%')->paginate(4);
      return view('colleges_and_universities', compact('unis'));
    }

    public function showapplication($uni_id){
      $uni=University::find($uni_id);
      $stu_id=Auth::id();
      return view('showapplication', compact('uni','stu_id'));
    }

    public function save(Request $request){
      /*dd(request()->all());*/
      $this->validate($request, [
        'transcript' => 'required',
        'transcript.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'passport' => 'required',
        'passport.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
      ]);

      if($request->hasfile('transcript')){
        $image = $request->file('transcript');

        $name=$image->getClientOriginalName();
        $image->move(public_path().'/images/', $name);
        $transcript = $name;
      }

      if($request->hasfile('passport')){
        $image = $request->file('passport');

        $name=$image->getClientOriginalName();
        $image->move(public_path().'/images/', $name);
        $passport = $name;
      }

         $form= new Admission;
         $form->stu_id = request('stu_id');
         $form->uni_id = request('uni_id');

         $form->transcript = $transcript;
         $form->passport = $passport;

         $form->save();

        return back()->with('success', 'Your images has been successfully uploaded');
      }
}
