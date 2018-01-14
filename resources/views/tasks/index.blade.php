@extends('layouts.app')


@section ('task_table')

    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading"><h1>Darāmais</h1></div>
            <div class="panel-body">
                @if(Auth::user())
                @if (Auth::user()->hasrole('Admins')||Auth::user()->hasrole('Valde'))
                    @if(count($errors))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach

                        </ul>
                    </div>
                    @endif
                    <form method="POST" action="/tasks">
                        {{csrf_field()}}

                        <div class="form-group row">
                            <div class="col-xs-12">
                                <label class="sr-only">Darbs</label>
                                <input type="text" class="form-control" id="task" name="task" placeholder="Darbs">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-xs-2">
                                <label class="sr-only">Komisija</label>
                                <select class="form-control" id="unit" name="unit">
                                    <option value="Visi">Visi</option>
                                    <option value="AK">AK</option>
                                    <option value="KK">KK</option>
                                    <option value="KSK">KSK</option>
                                </select>
                            </div>


                            <div class="col-xs-3">
                                <label class="sr-only" f>Statuss</label>
                                <select class="form-control" id="status" name="status">
                                    <option value="Gatavs">Gatavs</option>
                                    <option value="Procesā">Procesā</option>
                                    <option value="Atcelts">Atcelts</option>
                                    <option value="Nav sākts">Nav sākts</option>
                                </select>
                            </div>


                            <div class="col-xs-3">
                                <label class="sr-only">Datums</label>
                                <input type="date" class="form-control" id="date" name="date" placeholder="Datums" >
                            </div>


                            <div class="col-xs-4">
                                <label class="sr-only">Galvenais orgs</label>
                                <input type="text" class="form-control" id="mainOrg" name="mainOrg" placeholder="Galvenais Orgs" >
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-xs-12">
                                <label class="sr-only">Palīgi</label>
                                <input type="text" class="form-control" id="helper" name="helper" placeholder="Palīgi">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-3">
                                <button type="submit" class="btn btn-primary">Pievienot</button>
                            </div>
                        </div>
                    </form>
                @endif
                @endif
                <br>
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>Nr.</th>
                        <th>Komisija</th>
                        <th>Darbs</th>
                        <th>Statuss</th>
                        <th>Laiks</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tasks as $task)
                        <tr>
                            <td>{{$task->id}}</td>
                            <td>{{$task->unit}}</td>
                            <td>{{$task->task}}</td>
                            <td>{{$task->status}}</td>
                            <td>{{$task->date}}</td>
                            <td>V</td>
                        </tr>
                        <tr>
                            <td colspan="2">Atbildīgais: {{$task->mainOrg}}</td>
                            <td colspan="2">Palīgi: {{$task->helper}}</td>

                        </tr>

                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>

@endsection
