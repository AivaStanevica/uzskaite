<?php
@extends('layouts.app')

@section('title', '| Users')

@section('content')

    <div class="col-md-8 col-md-offset-2">
        <h1><i class="fa fa-users"></i> Lietotāju administrēšana <a href="{{ route('roles.index') }}" class="btn btn-default pull-right">Lomas</a>
            <a href="{{ route('permissions.index') }}" class="btn btn-default pull-right">Atļaujas</a></h1>
        <hr>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">

                <thead>
                <tr>
                    <th>Vārds</th>
                    <th>Epasts</th>
                    <th>Stu. ap. nr.</th>
                    <th>Reģistrēšanās datums</th>
                    <th>Lietotāja loma</th>
                    <th>Darbības</th>
                </tr>
                </thead>

                <tbody>
                @foreach ($users as $user)
                    <tr>

                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->code }}</td>
                        <td>{{ $user->created_at->format('F d, Y h:ia') }}</td>
                        <td>{{ $user->roles()->pluck('name')->implode(' ') }}</td>{{-- Retrieve array of roles associated to a user and convert to string --}}
                        <td>
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>

                            {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id] ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}

                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>

        <a href="{{ route('users.create') }}" class="btn btn-success">Add User</a>

    </div>

@endsection