@extends('layouts.app')




@section('content')

<h2  style="text-align: center">PANEL - Dodanie członka komisji</h2>


<div class="panel-body" align="center">

<form action="{{ action('CommissionsController@store') }}" method="post" role="form" >
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    <div class="form-group">
        <label for="title">Numer komisji</label>
        <input align="center"  style="width: 40%;" type="number" class="form-control" name="number_commission" />
    </div>

    <label for="title">Nazwa komisji</label>
    <div>
            <input align="center"  style="width: 40%;" type="text" class="form-control" name="name" />
    </div>

    <label for="title">Wybór użytkownika</label>
    <div>

        <select align="center"  style="width: 40%;" name="worker">
            @foreach ($workers as $worker)
            <option value="{{ $worker->id}}">{{ $worker->name }} {{ $worker->lastname }}- Wydział {{ $worker->department }}</option>
            @endforeach
        </select>
    </div>

    <label for="title">Rola</label>
    <div>
        <select align="center" style="width: 40%;" name="role">
            <option selected>Członek</option>
            <option>Zastępca</option>
            <option>Przewodniczący</option>
            <option>Sekretarz</option>
        </select>
    </div>

<br>
    <input type="submit" value="Dodaj" class="btn btn-primary" />
    <a href="{{ action('CommissionsController@index') }}" class="btn btn-link">Wróc</a>
</form>

</div>

@endsection('content')