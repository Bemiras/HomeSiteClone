@extends('layouts.app')




@section('content')

<h2 style="text-align: center">PANEL - Edycja członka komisji</h2>


<form align="center" action="{{ action('CommissionsController@update') }}" method="post" role="form" >
    <input type="hidden" name="id" value="{{ $commission->id }}">
    <div align="center" class="form-group">

        <label for="title">Numer komisji</label>
        <input type="number" style="width: 40%;" class="form-control" name="number_commission" value="{{ $commission->number_commission }}"/>
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    </div>

    <label for="title">Nazwa komisji</label>
    <div align="center">
        <input  style="width: 40%;"  type="text" class="form-control" name="name" />
    </div>

    <label for="title">Wybór użytkownika</label>
    <div>
        <select  align="center"style="width: 40%; text-align: center; align: center" name="worker">
            @foreach ($workers as $worker)
            <option value="{{ $worker->id}}">{{ $worker->name }} {{ $worker->lastname }} </option>
            @endforeach
        </select>
    </div>
    <label for="title">Rola</label>
    <div>
        <select align="center"style="width: 40%;" name="role">
            <option selected>Członek</option>
            <option>Zastępca</option>
            <option>Przewodniczący</option>
        </select>
    </div>


    <input align="center" type="submit" value="Dodaj" class="btn btn-primary" />
    <a href="{{ action('CommissionsController@index') }}" class="btn btn-link">Wróc</a>
</form>



@endsection('content')