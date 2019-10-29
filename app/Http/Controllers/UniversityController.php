<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UniversityController extends Controller
{
    public function index(){
        return view('colleges_and_universities');
    }

    public function applied(){
        return view('applied_universities');
    }
}
