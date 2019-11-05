@extends('layouts.app')

@section('content')

<h2 style="text-align: center">PANEL - Edycja roli pracownika</h2>

<div class="panel-body" style="text-align: center">
    <form action="{{ action('UserroleController@update') }}" method="post" role="form" >

    <label for="title">Rola</label>
    <div>
        <select align="center" style="width: 20%;" name="role">
            <option selected>Promotor</option>
            <option>Sekretarz</option>
            <option>Akademik</option>
            <option>Dziekanat</option>
            <option>Biblioteka</option>
            <option>Studium Wychowania fizycznego</option>
            <option>Katedra</option>
            <option>NULL</option>
        </select>
    </div></br>

    <input type="submit" value="Edytuj" class="btn btn-primary" />
    <a href="{{ action('UserroleController@index') }}" class="btn btn-link">Powrót</a>
</form>
</div>


@endsection('content')