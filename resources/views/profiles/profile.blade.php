@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading"><h1>Profils</h1></div>
        <div class="panel-body">
            <strong>Vārds:</strong>{{Auth::user()->name}}
        <br> <strong>Epasts:</strong>{{Auth::user()->email}}
        </div>
     </div>
    @endsection