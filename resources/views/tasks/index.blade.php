@extends('layouts.app')


@section ('content')

    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading"><h1>{{__('nav.todo')}}</h1></div>
            <div class="panel-body">
                @if(Auth::user())
                    @if (Auth::user()->hasrole('Admins')||Auth::user()->hasrole('Valde'))
                        @include('layouts.error')
                        <form method="POST" action="/tasks">
                            {{csrf_field()}}

                            <div class="form-group row">
                                <div class="col-xs-12">
                                    <label class="sr-only">Darbs</label>
                                    <input type="text" class="form-control" id="task" name="task" placeholder="Darbs" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-xs-2">
                                    <label class="sr-only">Komisija</label>
                                    <select class="form-control" id="unit" name="unit" required>
                                        <option value="Visi">Visi</option>
                                        <option value="AK">AK</option>
                                        <option value="KK">KK</option>
                                        <option value="KSK">KSK</option>
                                    </select>
                                </div>


                                <div class="col-xs-3">
                                    <label class="sr-only" f>Statuss</label>
                                    <select class="form-control" id="status" name="status" required>
                                        <option value="Gatavs">Gatavs</option>
                                        <option value="Procesā">Procesā</option>
                                        <option value="Atcelts">Atcelts</option>
                                        <option value="Nav sākts">Nav sākts</option>
                                    </select>
                                </div>


                                <div class="col-xs-3">
                                    <label class="sr-only">Datums</label>
                                    <input type="date" class="form-control" id="date" name="date" placeholder="Datums" required>
                                </div>


                                <div class="col-xs-4">
                                    <label class="sr-only">Galvenais orgs</label>
                                    <input type="text" class="form-control" id="mainOrg" name="mainOrg"
                                           placeholder="Galvenais Orgs" required>
                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="col-xs-12">
                                    <label class="sr-only">Palīgi</label>
                                    <input type="text" class="form-control" id="helper" name="helper"
                                           placeholder="Palīgi">
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
                <a id="more" href="#"
                   onclick="$('.details').slideToggle();"><button type="button" class="btn btn-default">Šķirot</button></a>
                <div class="details" style="display:none">
                    <h4>Šķirot pēc:</h4><br>



                </div>

                <br>
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>Nr.</th>
                        <th>Komisija</th>
                        <th>Darbs</th>
                        <th>Statuss</th>
                        <th>Datums</th>
                    </tr>
                    </thead>
                    @foreach($tasks as $task)
                    @include('tasks.task')
                    @endforeach
                </table>

            </div>
        </div>
        <!-- Modal -->

        </div>
@endsection
