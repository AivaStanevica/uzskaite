@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading"><h1>Profils</h1></div>
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-5 col-xs-offset-1 col-md-4 col-md-offset-1">
                   <img src="/uploads/avatars/{{$user->avatar}}" style="width: 250px; height: 250px; margin-right: 25px;">
                </div>
                <div class="col-xs-4 col-md-4 col-md-offset-1">
                <strong>Vārds:</strong>{{$user->name}}
                <br><strong>Epasts:</strong>{{$user->email}}
                <br><strong>Studentu apliecības nr.:</strong>{{$user->code}}
                    <hr>
                <form enctype="multipart/form-data" action="/profile" method="POST">
                    <label>Atjaunot profila attēlu:</label>
                    <input type="file" name="avatar">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="submit" class="pull-right btn btn-sm btn-primary" name="pievienot">
                </form>
                </div>
            </div>

        </div>
    </div>
@endsection