@extends('layouts.app')

@if (Auth::user()->hasrole('Admins'))
@section ('content')
   <div class="col-md-10 col-md-offset-1">
       <div class="panel panel-default">
           <h1>Esmu varens admins!</h1>
       </div>
   </div>
@else return view('/');

    @endif
@endsection