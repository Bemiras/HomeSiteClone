@extends('layouts.app')




@section('content')

<h2 style="text-align: center">PANEL - Komisje</h2></br>


<table align="center"  style="width: 70%;" class="table">
    <thead>
    <tr>
        <th><h4>Nazwa</h4></th>
        <th><h4>Numer pracownika</h4></th>
        <th><h4>Imię</h4></th>
        <th><h4>Nazwisko</h4></th>s
        <th><h4>Rola</h4></th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @foreach ($userlistPrzewodniczacy as $userPrzewodniczacy)
    <tr>
        <th scope="row">{{$userPrzewodniczacy->commission_name}}</th>
        <th>{{$userPrzewodniczacy->workerPrzewodniczacy_id}}</th>
        <th>{{$userPrzewodniczacy->workerPrzewodniczacy_name}}</th>
        <th>{{$userPrzewodniczacy->workerPrzewodniczacy_lastname}}</th>
        <th>Przewodniczacy</th>
        <th><a  href="{{ action('CommissionsController@edit', $userPrzewodniczacy->id) }}"><img src={{ asset('images/edit.png') }}  /></a></th>
        <th><a  href="{{ action('CommissionsController@destroy', $userPrzewodniczacy->id) }}"><img src={{ asset('images/delete.png') }}  /></a></th>
    </tr>
            @foreach ($userlistZastepca as $userZastepca)
            <tr>
                <th scope="row"></th>
                <th>{{$userZastepca->workerZastepca_id}}</th>
                <th>{{$userZastepca->workerZastepca_name}}</th>
                <th>{{$userZastepca->workerZastepca_lastname}}</th>
                <th>Zastepca</th>
            </tr>
                    @foreach ($userlistSekretarz as $userSekretarz)
                    <tr>
                        <th scope="row"></th>
                        <th>{{$userSekretarz->workerSekretarz_id}}</th>
                        <th>{{$userSekretarz->workerSekretarz_name}}</th>
                        <th>{{$userSekretarz->workerSekretarz_lastname}}</th>
                        <th>Sekretarz</th>
                    </tr>
                    @endforeach
            @endforeach
    @endforeach
    </tbody>
</table>

<div align="center" class="panel-body">
    <a style="width: 15%;" href="{{ action('CommissionsController@create') }}" class="btn btn-info">Dodaj komisje</a>
</div>



@endsection('content')