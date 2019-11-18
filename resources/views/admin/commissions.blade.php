@extends('layouts.app')




@section('content')

<h2 style="text-align: center">PANEL - Komisje</h2>

<div align="center" class="panel-body">
    <a style="width: 15%;" href="{{ action('CommissionsController@create') }}" class="btn btn-info">Dodaj członka komisji</a>
</div>



<table align="center"  style="width: 70%;" class="table">
    <thead>
    <tr>
        <th><h4>Numer komisji</h4></th>
        <th><h4>Nazwa</h4></th>
        <th><h4>Rola</h4></th>
        <th><h4>Numer pracownika</h4></th>
        <th><h4>Imię</h4></th>
        <th><h4>Nazwisko</h4></th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @foreach ($userlist as $user)
    <tr>
        <th scope="row">{{$user->number_commission}}</th>
        <th>{{$user->name}}</th>
        <th>{{$user->role_commission}}</th>
        <th>{{$user->usernumber_commission}}</th>
        <th>{{$user->usercommission->name}}</th>
        <th>{{$user->usercommission->lastname}}</th>
        <th><a  href="{{ action('CommissionsController@edit', $user->id) }}"><img src={{ asset('images/edit.png') }}  /></a></th>
        <th><a  href="{{ action('CommissionsController@destroy', $user->id) }}"><img src={{ asset('images/delete.png') }}  /></a></th>

    </tr>
    @endforeach
    </tbody>
</table>



@endsection('content')