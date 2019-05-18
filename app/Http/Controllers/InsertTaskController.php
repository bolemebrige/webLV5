<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Task;

use Illuminate\Support\Facades\Auth;
use \App\routes\web;

class InsertTaskController extends Controller
{
    //
  protected function redirectTo()
{
    return '/CheckRole';
}



    public function InsertTask(Request $request){	


$NewTask = new Task;


$NewTask->naziv=$request->naziv;
$NewTask->naziv_eng=$request->input('naziv_eng');
$NewTask->zadatak=$request->input('zadatak');
$NewTask->studij=$request->input('studij');

$NewTask->save();

redirectTo();	

    }


/*  public function edit(Request $changerequest){


$authID= Auth::id();
$selectedProject = new Project;
$selectedProject= \App\Project::find( $changerequest->id);


$selectedProject->naziv=$changerequest->naziv;
$selectedProject->opis=$changerequest->opis;
$selectedProject->obavljeni_poslovi=$changerequest->poslovi;
$selectedProject->datum_početka=$changerequest->start;
$selectedProject->datum_završetka=$changerequest->end;
$selectedProject->id_voditelja=$changerequest->id_voditelja;


$selectedProject->save();
  	

if($authID==$changerequest->id_voditelja){

$RadiNa = \App\RadiNa::create(['id_projekta' =>  $changerequest->id , 'id_radnika' => $changerequest->human]);}


  	return view('welcome');	
  }
*/


}