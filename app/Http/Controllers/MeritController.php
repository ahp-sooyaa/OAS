<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Merit;

class MeritController extends Controller
{
    public function index(){
      $merits = Merit::all();

        return view('merit', compact('merits'));
    }
}
