@extends('layouts.app')




@section('content')

<h2 style="text-align: center">PANEL - Archiwum</h2>




<table align="center"  style="width: 40%;" class="table">
    <thead>
    <tr>
        <th><h4>Numer studenta</h4></th>
        <th><h4>Imię</h4></th>
        <th><h4>Nazwisko</h4></th>
        <th><h4>Wydział</h4></th>
        <th><h4>Kierunek</h4></th>

    </tr>
    </thead>
    <tbody>
    @foreach ($userlist as $user)
    <tr>
    @if ($user->card == 'Zakonczona')
        <th scope="row">{{$user->id_student}}</th>
        <th>{{$user->name_student}}</th>
        <th>{{$user->lastname_student}}</th>
        <th>{{$user->name_department}}</th>
        <th>{{$user->name_direction}}</th>
        @endif
    </tr>
    @endforeach
    </tbody>
</table>




@endsection('content')