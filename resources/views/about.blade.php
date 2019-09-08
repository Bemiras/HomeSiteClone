@extends('layouts.app')




@section('content')

<h2 style="text-align: center">PANEL - Moje dane</h2>


@if (Auth::check() && Auth::user()->role == 'student')
        <table align="center"  style="width: 40%;" class="table">
            <tr>
                <td>Numer albumu:</td>
                <td>{{ Auth::user()->albumnumber }}</td>
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
                <td>Rodzaj studiów:</td>
                <td>{{ Auth::user()->typestudy }}</td>
            </tr>
            <tr>
                <td>Poziom studiów:</td>
                <td>{{ Auth::user()->levelstudy }}</td>
            </tr>
            <tr>
                <td>Wydział:</td>
                <td>{{ Auth::user()->department }}</td>
            </tr>
            <tr>
                <td>Kierunek:</td>
                <td>{{ Auth::user()->direction }}</td>
            </tr>
            <tr>
                <td>Rola:</td>
                <td>{{ Auth::user()->role }}</td>
            </tr>
        </table>
@endif

@if (Auth::check() && Auth::user()->role == 'pracownik')
<table align="center"  style="width: 40%;" class="table">
    <tr>
        <td>Numer pracownika (login):</td>
        <td>{{ Auth::user()->albumnumber }}</td>
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
        <td>{{ Auth::user()->department }}</td>
    </tr>
    <tr>
        <td>Rola:</td>
        <td>{{ Auth::user()->role }}</td>
    </tr>
</table>
@endif

@if (Auth::check() && Auth::user()->role == 'administrator')
<table align="center"  style="width: 40%;" class="table">
    <tr>
        <td>Numer pracownika (login):</td>
        <td>{{ Auth::user()->albumnumber }}</td>
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


