
@extends('layouts.app')
@section('content')


@section('content')
<h2 style="text-align: center">PANEL - Wiadomosci wysłane</h2><br>

<table align="center"  style="width: 70%;" class="table">
    <thead>
    <tr>
        <th><h4>Odbiorca</h4></th>
        <th><h4>Treść</h4></th>

    </tr>
    </thead>
    <tbody>
    @foreach ($messagelistRecipient as $messageRecipient)
        @if($messageRecipient->sender == Auth::user()->id)
        <tr>
            <th>{{$messageRecipient->messageRecipient_name}} {{$messageRecipient->messageRecipient_lastname}} </th>
            <th>{{$messageRecipient->message}}</th>
        </tr>
        @endif
    @endforeach
    </tbody>
</table>


@endsection('content')
@endsection