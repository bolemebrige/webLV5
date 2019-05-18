<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use \App\routes\web;

class Rolecontroller extends Controller{



public function CheckRole(){


$logedRole=Auth::role();


if($loggedRole == 'nastavnik'){

	return view('home');
}
else if($loggedRole == 'student'){

return view('student');

}



$locale = App::getLocale();

if (App::isLocale('en')) {
    //
	return view('home/en');

}



}
}

?>