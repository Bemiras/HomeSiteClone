
@extends('layouts.app')
@section('content')

@section('content')

<table align="center"  style="width: 40%;" class="table">
    <h1 align="center" style="width: 73%;">Zalogowano jako {{ Auth::user()->name }} {{ Auth::user()->lastname }}</h1>
    <p class="text-center" style="width: 59%;">Witaj w systmie obługi kart obiegowych.</p>



</table>





@endsection('content')
@endsection
