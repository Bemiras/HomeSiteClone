@extends('layouts.app')




@section('content')

<h2 style="text-align: center">PANEL - Kierunki </h2>

<div align="center" class="panel-body">
    <a style="width: 40%;" href="{{ action('DirectionofferController@create') }}" class="btn btn-info">Dodaj kierunek</a>
</div>

<table align="center"  style="width: 40%;" class="table">
    <thead>
    <tr>
        <th>Kierunek</th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @foreach ($userlist as $user)
    <tr>
        <th>{{$user->name}}</th>
        <th><a href="{{ action('DirectionofferController@edit', $user->id) }}" >Edytuj</a></th>
        <th><a href="{{ action('DirectionofferController@destroy', $user->id) }}" >Usuń</a></th>

    </tr>
    @endforeach
    </tbody>
</table>



@endsection('content')