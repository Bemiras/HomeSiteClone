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
        <th>Anuluj</th>
        
    </tr>
    </thead>
    <tbody>
    @foreach ($userlist as $user)
    <tr>
    @if ($user->deanery == 'Zakonczona' && $user->card == 'W realizacji')
        <th scope="row">{{$user->id}}</th>
        <th>{{$user->name}}</th>
        <th>{{$user->lastname}}</th>
        <th>{{$user->deanery}}</th>
        <th><a  href="{{ action('PendingapplicationController@updateNoCard', $user->id) }}"><img src={{ asset('images/notAkcept.png') }}  /></a></th>
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
        <th>Anuluj</th>
        
    </tr>
    </thead>
    <tbody>
    @foreach ($userlist as $user)
    <tr>
    @if ($user->liblary == 'Zakonczona' && $user->card == 'W realizacji')
        <th scope="row">{{$user->id}}</th>
        <th>{{$user->name}}</th>
        <th>{{$user->lastname}}</th>
        <th>{{$user->liblary}}</th>
        <th><a  href="{{ action('PendingapplicationController@updateNoCard', $user->id) }}"><img src={{ asset('images/notAkcept.png') }}  /></a></th>
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
        <th>Anuluj</th>
        
    </tr>
    </thead>
    <tbody>
    @foreach ($userlist as $user)
    <tr>
    @if ($user->dormitory == 'Zakonczona' && $user->card == 'W realizacji')
        <th scope="row">{{$user->id}}</th>
        <th>{{$user->name}}</th>
        <th>{{$user->lastname}}</th>
        <th>{{$user->dormitory}}</th>
        <th><a  href="{{ action('PendingapplicationController@updateNoCard', $user->id) }}"><img src={{ asset('images/notAkcept.png') }}  /></a></th>
        @endif
    </tr>
    @endforeach
    </tbody>
</table>

@elseif ( Auth::user()->specialization == 'promotor' )
<table align="center"  style="width: 40%;" class="table">
    <thead>
    <tr>
        <th>Numer studenta</th>
        <th>Imię</th>
        <th>Nazwisko</th>
        <th>WPIS Promotor</th>
        <th>Anuluj</th>

    </tr>
    </thead>
    <tbody>
    @foreach ($userlist as $user)
    <tr>
        @if ($user->promoter == 'Zakonczona' && $user->card == 'W realizacji' && Auth::user()->id == $user->userPromoter)
        <th scope="row">{{$user->id_student}}</th>
        <th>{{$user->name_student}}</th>
        <th>{{$user->lastname_student}}</th>
        <th>{{$user->promoter}}</th>
        <th><a  href="{{ action('PendingapplicationController@updateNoPromoter', $user->id_card) }}"><img src={{ asset('images/notAkcept.png') }}  /></a></th></th>
        @endif
    </tr>
    @endforeach
    </tbody>
</table>

@elseif ( Auth::user()->specialization == 'sekretarz' )
<table align="center"  style="width: 40%;" class="table">
    <thead>
    <tr>
        <th>Numer studenta</th>
        <th>Imię</th>
        <th>Nazwisko</th>
        <th>Wydział</th>
        <th>Kierunek</th>
        <th>Anuluj</th>

    </tr>
    </thead>
    <tbody>
    @foreach ($userlist->unique('name') as $user)
    <tr>
        @if ($user->card == 'W realizacji' && $user->commission_id == $user->number_commission && Auth::user()->id == $user->usernumber_commission)
        <th scope="row">{{$user->id_student}}</th>
        <th>{{$user->name_student}}</th>
        <th>{{$user->lastname}}</th>
        <th>{{$user->name_department}}</th>
        <th>{{$user->name_direction}}</th>
        <th><a  href="{{ action('PendingapplicationController@updateNoCard', $user->id) }}"><img src={{ asset('images/notAkcept.png') }}  /></a></th>
        @endif
    </tr>
    @endforeach
    </tbody>
</table>
@endif



@endsection('content')