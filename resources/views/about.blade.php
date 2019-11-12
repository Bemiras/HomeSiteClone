@extends('layouts.app')
{ HTML::style('css/images.css') }


@section('content')

<h2 style="text-align: center">PANEL - Moje dane</h2>


@if (Auth::check() && Auth::user()->role == 'student')
        <table align="center"  style="width: 40%;" class="table">
            <tr>
                <td>Numer albumu:</td>
                <td>{{ Auth::user()->id }}</td>
            </tr>
            <tr>
                <td>Imię:</td>
                <td> {{ Auth::user()->name }}</td>
            </tr>
            <tr>
                <td>Nazwisko:</td>
                <td>{{ Auth::user()->lastname }}</td>
            </tr>
            <tr>
                <td>E-mail:</td>
                <td>{{ Auth::user()->email }}</td>
            </tr>
            <tr>
                <td>Wydział:</td>
                <td>{{ $datadepartment->name}}</td>
            </tr>
            <tr>
                <td>Kierunek:</td>
                <td>{{ $datadirection->name}}</td>
            </tr>
            <tr>
                <td>Poziom studiów:</td>
                <td>{{ $datalevelstudy->name}}</td>
            </tr>
            <tr>
                <td>Rodzaj studiów:</td>
                <td>{{ $datatypestudy->name}}</td>
            </tr>
            <tr>
                <td>Rola:</td>
                <td>{{ Auth::user()->role }}</td>
            </tr>
            <tr>
                <td>Karta obiegowa:</td>
                <td>{{ Auth::user()->card }}</td>
            </tr>
        </table>
@endif

@if (Auth::check() && Auth::user()->role == 'pracownik')
<table align="center"  style="width: 40%;" class="table">
    <tr>
        <td>Numer pracownika (login):</td>
        <td>{{ Auth::user()->id }}</td>
    </tr>
    <tr>
        <td>Imię:</td>
        <td> {{ Auth::user()->name }}</td>
    </tr>
    <tr>
        <td>Nazwisko:</td>
        <td>{{ Auth::user()->lastname }}</td>
    </tr>
    <tr>
        <td>E-mail:</td>
        <td>{{ Auth::user()->email }}</td>
    </tr>
    <tr>
        <td>Wydział:</td>
        <td>{{ $datadepartment->name}}</td>
    </tr>
    <tr>
        <td>Rola:</td>
        <td>{{ Auth::user()->role }}</td>
    </tr>
@if (Auth::user()->specialization != 'NULL')
    <tr>
        <td>Specjalizacja:</td>
        <td>{{ Auth::user()->specialization }}</td>
    </tr>
@endif
    
</table>
@endif

@if (Auth::check() && Auth::user()->role == 'administrator')
<table align="center"  style="width: 40%;" class="table">
    <tr>
        <td>Numer pracownika (login):</td>
        <td>{{ Auth::user()->id }}</td>
    </tr>
    <tr>
        <td>Imię:</td>
        <td> {{ Auth::user()->name }}</td>
    </tr>
    <tr>
        <td>Nazwisko:</td>
        <td>{{ Auth::user()->lastname }}</td>
    </tr>
    <tr>
        <td>E-mail:</td>
        <td>{{ Auth::user()->email }}</td>
    </tr>
    <tr>
        <td>Rola:</td>
        <td>{{ Auth::user()->role }}</td>
    </tr>
</table>
@endif

@endsection('content')


