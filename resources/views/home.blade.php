@extends('layouts.app')

@section('content')
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
        </div>
    </div>
</div>
@endsection
