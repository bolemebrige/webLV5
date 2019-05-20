<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Task;

use Illuminate\Support\Facades\Auth;
use \App\routes\web;

class InsertTaskController extends Controller
{
    //
 public function redirectTo()
{
    return '/CheckRole';
}



    public function InsertTask(Request $request){	


$NewTask = new Task;


$NewTask->naziv=$request->naziv;
$NewTask->naziv_eng=$request->input('naziv_eng');
$NewTask->zadatak=$request->input('zadatak');
$NewTask->studij=$request->input('studij');
$NewTask->mentor_id=Auth::id();

$NewTask->save();


return redirect()->action('RoleController@CheckRole');
    }



}