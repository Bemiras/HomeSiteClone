
@extends('layouts.app')
@section('content')


@section('content')
<h2 style="text-align: center">PANEL - Wiadomosci odebrane </h2><br>

<table align="center"  style="width: 70%;" class="table">
    <thead>
    <tr>
        <th><h4>Nadawca</h4></th>
        <th><h4>Treść</h4></th>

    </tr>
    </thead>
    <tbody>
    @foreach ($messagelistSender as $messageSender)
        @if($messageSender->recipient == Auth::user()->id)
        <tr>
            <th>{{$messageSender->messageSender_name}} {{$messageSender->messageSender_lastname}} </th>
            <th>{{$messageSender->message}}</th>
        </tr>
        @endif
    @endforeach
    </tbody>
</table>


@endsection('content')
@endsection