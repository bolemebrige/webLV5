<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use \App\routes\web;

class Rolecontroller extends Controller{



public function CheckRole(){



$user = Auth::user();
$loggedRole=$user->role;

if($loggedRole == 'nastavnik'){

	return view('home');
}
elseif($loggedRole == 'student'){

return view('student');

}



//$locale = App::getLocale();

/*    //
	return view('home/hr');

}
*/


}
}

?>