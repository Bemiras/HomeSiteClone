@extends('layouts.app')




@section('content')

<h2 style="text-align: center">PANEL - Moje dane</h2>




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
        </table>




@endsection('content')