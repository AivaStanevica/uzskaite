@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading"><h1>Profils</h1></div>
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-6 col-md-4">.col-md-6</div>
                <div class="col-xs-6 col-md-4">
                <strong>Vārds:</strong>{{Auth::user()->name}}
                <br><strong>Epasts:</strong>{{Auth::user()->email}}
                </div>
            </div>

        </div>
    </div>
@endsection