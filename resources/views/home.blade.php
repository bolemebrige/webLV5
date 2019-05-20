@extends('layouts.app')

@section('content')





<?php
use Illuminate\Support\Facades\Auth;
$Tasks= \App\Task::where('mentor_id',Auth::id())->get();



$Prijave = \App\Prijava::all();


?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

<li><a href="{{ url('locale/en') }}" ><i class="fa fa-language"></i> EN</a></li>

<li><a href="{{ url('locale/hr') }}" ><i class="fa fa-language"></i> HR</a></li>

            <div class="card">

   

   <div class="card-header">@lang('home.naslov')</div>

                <div class="card-body">





<form action="/InsertTask" >
    

           @lang('home.naziv')  
           <br>
              <input type="text" name="naziv"><br>

              @lang('home.naziv_eng')<br>
              <input type="text" name="naziv_eng"><br>

             @lang('home.zadatak')<br>
              <input type="text" name="zadatak"><br>


            @lang('home.studij')<br>
              <input type="text" name="studij"><br>

             

    <button type="submit" >@lang('home.dodaj')</button>


</form>

                </div>

            </div>




            <div class="card" >
                <div class="card-header"> Prijave</div>
                  
                      <div class="card-body">
                    <table>
                      

  @php

foreach ($Prijave as $Prijava){

foreach ($Tasks as $Task){

if($Prijava->rad_id == $Task->id){
echo "<tr>";
echo '<td onClick="myfunction(this.id)" id="'.$Task->id.'">'. $Task->naziv."</td>";

echo "</tr>";
}
}
}


@endphp



                    </table>


                


              </div>
            </div>
        </div>
    </div>
</div>



<script type="text/javascript">
    




function myfunction(clicked_id,clicked_name){
        if (window.XMLHttpRequest){
    xmlhttp=new XMLHttpRequest();
}
else{
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
var PageToSendTo = "http://localhost:8000/AcceptApplication?";
var MyVariable1 = clicked_id;
var MyVariable2 = clicked_name;
var VariablePlaceholder1 = "task_id=";
var VariablePlaceholder2 = "&student_id=";
var UrlToSend = PageToSendTo + VariablePlaceholder1 + MyVariable1+ VariablePlaceholder2+ MyVariable2;
    window.open(UrlToSend);
    
    
}
</script>

@endsection
