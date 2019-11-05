@extends('layouts.app')




@section('content')

<h2 style="text-align: center">PANEL - Role użytkowników</h2>

<table align="center"  style="width: 40%;" class="table">
    <thead>
    <tr>
        <th>Numer pracownika</th>
        <th>Imię</th>
        <th>Nazwisko</th>
        <th>Wydział</th>
        <th>Kierunek</th>
        <th>Rola</th>
        <th>Specjalizacja</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($workerlist as $worker)
    <tr>
        <th scope="row">{{$worker->id}}</th>
        <th>{{$worker->name}}</th>
        <th>{{$worker->lastname}}</th>
        <th>{{$worker->department}}</th>
        <th>{{$worker->direction}}</th>
        <th>{{$worker->role}}</th>
        <th>{{$worker->specialization}}</th>
        <th><a  href="{{ action('UserroleController@edit', $worker->id) }}"><img src={{ asset('images/edit.png') }}  /></a></th>
    </tr>
    @endforeach
    </tbody>
</table>







@endsection('content')