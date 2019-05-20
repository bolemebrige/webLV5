<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Prijava;

use \App\User;
use Illuminate\Support\Facades\Auth;
use \App\routes\web;

class PickTaskController extends Controller
{
    //


    public function PickTask(Request $request){	


$NewPrijava = new Prijava;
$user = Auth::user();


$NewPrijava->student_id=$user->id;
$NewPrijava->rad_id=$request->input('id');

$NewPrijava->save();


return view('/student');
    }



}