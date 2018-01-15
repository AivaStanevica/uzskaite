@extends('layouts.app')

@section ('content')
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading"><h1>{{$task->task}}</h1></div>
            <div class="panel-body">
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
                    <tbody>

                    <tr>
                        <td>{{$task->id}}</td>
                        <td>{{$task->unit}}</td>
                        <td>{{$task->task}}</td>
                        <td>{{$task->status}}</td>
                        <td>{{$task->date}}</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu1"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span
                                            class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="#">Labot</a></li>
                                    <li><a href="#">Dzēst</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="6">Atbildīgais: {{$task->mainOrg}}
                            <br>Palīgi: {{$task->helper}}
                            <hr>
                            Komentāri:
                            @foreach($task->comments as $comment)
                                <article>
                                    {{$comment->user->name}}

                                    <strong>{{$comment->created_at->diffForHumans()}}</strong>
                                    {{$comment->body}}
                                </article>
                        @endforeach
                    </tr>
                    </tbody>
                </table>

                <form method="POST" action="/tasks/{{$task->id}}/comments">
                    {{csrf_field()}}
                    <div class="form-group">
                        <textarea name="body" placeholder="Komentāri" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Pievienot komentāru</button>
                    </div>
                </form>

                <button><a href="{{ url('/') }}">Atpakaļ</a></button>
            </div>
        </div>
    </div>
@endsection