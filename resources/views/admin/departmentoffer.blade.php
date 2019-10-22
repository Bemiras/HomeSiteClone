@extends('layouts.app')




@section('content')

<h2 style="text-align: center">PANEL - Wydziały </h2>

<div align="center" class="panel-body">
    <a style="width: 40%;" href="{{ action('DepartmentofferController@create') }}" class="btn btn-info">Dodaj wydział</a>
</div>

<table align="center"  style="width: 40%;" class="table">
    <thead>
    <tr>
        <th>Wydział</th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @foreach ($userlist as $user)
    <tr>
        <th>{{$user->name}}</th>
        <th><a href="{{ action('DepartmentofferController@edit', $user->id) }}" >Edytuj</a></th>
        <th><a href="{{ action('DepartmentofferController@destroy', $user->id) }}" >Usuń</a></th>

    </tr>
    @endforeach
    </tbody>
</table>



@endsection('content')