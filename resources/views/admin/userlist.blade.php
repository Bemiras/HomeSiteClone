@extends('layouts.app')




@section('content')

<h2 style="text-align: center">PANEL - Lista użytkowników</h2>

<table align="center"  style="width: 40%;" class="table">
    <thead>
    <tr>
        <th>Numer studenta/pracownika</th>
        <th>Imię</th>
        <th>Nazwisko</th>
        <th>Wydział</th>
        <th>Kierunek</th>
        <th>Rola</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($userlist as $user)
    <tr>
        <th scope="row">{{$user->id}}</th>
        <th>{{$user->name}}</th>
        <th>{{$user->lastname}}</th>
        <th>{{$user->department}}</th>
        <th>{{$user->direction}}</th>
        <th>{{$user->role}}</th>

    </tr>
    @endforeach
    </tbody>
</table>



@endsection('content')