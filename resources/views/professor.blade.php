@extends('layouts.app')
@section('content')
<script type="text/javascript">
    




function myfunction(clicked_id){
        if (window.XMLHttpRequest){
    xmlhttp=new XMLHttpRequest();
}
else{
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
var PageToSendTo = "http://localhost:8000/editProject?";
var MyVariable = clicked_id;
var VariablePlaceholder = "id=";
var UrlToSend = PageToSendTo + VariablePlaceholder + MyVariable;
    window.open(UrlToSend);
    
    
}
</script>

<?php


$Tasks = \App\Task::all();


?>




<div class="container-fluid">
  


  <div class="row">



		    <div class="col-sm">
		      

		
		    </div>



		    <div class="col-sm">
<table>
	@php

foreach ($Tasks as $Task){

echo "<tr>";
echo '<td onClick="myfunction(this.id)" id="'.$Task->id.'">'. $Task->naziv ."</td>";

echo "</tr>";

}


@endphp
</table>
		    </div>

		    <div class="col-sm">

	
		    </div>


		
	</div>
 </div>  




@endsection   

        






           
       
  






