
@extends('layouts.app')
@section('content')


@section('content')
<h2 style="text-align: center">PANEL - Wiadomosci</h2><br>

<table align="center"  style="width: 40%;" class="table">
    <thead>
    <tr>
        <th>Wysyłający (id_user)</th>
        <th>Odbierajacy (id_user)</th>
        <th>Treść</th>

    </tr>
    </thead>
    <tbody>
    @foreach ($messagelist as $message)
    <tr>
        <th>{{$message->sender}}</th>
        <th>{{$message->recipient}}</th>
            @if($message->recipient == Auth::user()->id}})
            <th>{{$message->message}}</th>
            @endif
    </tr>
    @endforeach
    </tbody>
</table>


@endsection('content')
@endsection