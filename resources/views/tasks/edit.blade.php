@extends('layouts.app')
@section('content')
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
    @if(Auth::user())
        @if (Auth::user()->hasrole('Admins')||Auth::user()->hasrole('Valde'))
            <div class="panel-heading"><h1>{{__('nav.edit')}}</h1></div>
            <div class="panel-body">
                @include('layouts.error')
                {!! Form::model($task, ['method' => 'PATCH','route' => ['tasks.update', $task->id]]) !!}
                <div class="form-group row">
                    <div class="col-xs-12">
                        <label class="sr-only">Darbs</label>
                        <input type="text" class="form-control" id="task" name="task" value="{{$task->task}}">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-xs-2">
                        <label class="sr-only">Komisija</label>
                        <select class="form-control" id="unit" name="unit" value="{{$task->unit}}">
                            <option value="Visi">Visi</option>
                            <option value="AK">AK</option>
                            <option value="KK">KK</option>
                            <option value="KSK">KSK</option>
                        </select>
                    </div>


                    <div class="col-xs-3">
                        <label class="sr-only" f>Statuss</label>
                        <select class="form-control" id="status" name="status" value="{{$task->status}}">
                            <option value="Gatavs">Gatavs</option>
                            <option value="Procesā">Procesā</option>
                            <option value="Atcelts">Atcelts</option>
                            <option value="Nav sākts">Nav sākts</option>
                        </select>
                    </div>


                    <div class="col-xs-3">
                        <label class="sr-only">Datums</label>
                        <input type="date" class="form-control" id="date" name="date" value="{{$task->date}}">
                    </div>


                    <div class="col-xs-4">
                        <label class="sr-only">Galvenais orgs</label>
                        <input type="text" class="form-control" id="mainOrg" name="mainOrg"
                               value="{{$task->mainOrg}}">
                    </div>
                </div>

                <div class="form-group row">

                    <div class="col-xs-12">
                        <label class="sr-only">Palīgi</label>
                        <input type="text" class="form-control" id="helper" name="helper"
                               value="{{$task->helper}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-3">
                        <button type="submit" class="btn btn-primary">Labot</button>
                    </div>
                </div>
                    {!! Form::close() !!}
            </div>
        @endif
    @endif
        </div>
    </div>


@endsection
