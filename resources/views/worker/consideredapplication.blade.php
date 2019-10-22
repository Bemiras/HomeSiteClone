@extends('layouts.app')




@section('content')

<h2 style="text-align: center">PANEL - Rozpatrzone podania</h2>


@if ( Auth::user()->specialization == 'dziekanat' )
<table align="center"  style="width: 40%;" class="table">
    <thead>
    <tr>
        <th>Numer studenta</th>
        <th>Imię</th>
        <th>Nazwisko</th>
        <th>WPIS Dziekanat</th>
        
    </tr>
    </thead>
    <tbody>
    @foreach ($userlist as $user)
    <tr>
    @if ($user->deanery == 'Zakonczona')
        <th scope="row">{{$user->id}}</th>
        <th>{{$user->name}}</th>
        <th>{{$user->lastname}}</th>
        <th>{{$user->deanery}}</th>
    @endif
    </tr>
    @endforeach
    </tbody>
</table>


@elseif ( Auth::user()->specialization == 'biblioteka' )
<table align="center"  style="width: 40%;" class="table">
    <thead>
    <tr>
        <th>Numer studenta</th>
        <th>Imię</th>
        <th>Nazwisko</th>
        <th>WPIS Biblioteka</th>
        
    </tr>
    </thead>
    <tbody>
    @foreach ($userlist as $user)
    <tr>
    @if ($user->liblary == 'Zakonczona')
        <th scope="row">{{$user->id}}</th>
        <th>{{$user->name}}</th>
        <th>{{$user->lastname}}</th>
        <th>{{$user->liblary}}</th>
    @endif
    </tr>
    @endforeach
    </tbody>
</table>

@elseif ( Auth::user()->specialization == 'akademik' )
<table align="center"  style="width: 40%;" class="table">
    <thead>
    <tr>
        <th>Numer studenta</th>
        <th>Imię</th>
        <th>Nazwisko</th>
        <th>WPIS Akademik</th>
        
    </tr>
    </thead>
    <tbody>
    @foreach ($userlist as $user)
    <tr>
    @if ($user->dormitory == 'Zakonczona')
        <th scope="row">{{$user->id}}</th>
        <th>{{$user->name}}</th>
        <th>{{$user->lastname}}</th>
        <th>{{$user->dormitory}}</th>
    @endif
    </tr>
    @endforeach
    </tbody>
</table>
@endif



@endsection('content')