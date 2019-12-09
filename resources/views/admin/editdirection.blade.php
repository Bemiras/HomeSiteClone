@extends('layouts.app')




@section('content')

<h2 style="text-align: center">PANEL - Edycja kierunku</h2>

<div class="panel-body" style="text-align: center">
<form action="{{ action('DirectionofferController@update', $direction->id) }}" method="post" role="form" >
    {{ csrf_field() }}
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <label for="title"><h4>Wydział:</h4></label>
        <div>
            <textarea name="name" style="width: 40%;" rows="1" cols="30" value="{{ old('name') }}" required></textarea>
        </div></br>
        @if ($errors->has('name'))
        <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>

    <input type="submit" value="Zamień" class="btn btn-primary" />
    <a href="{{ action('DirectionofferController@index') }}" class="btn btn-link">Powrót</a>
</form>
</div>


@endsection('content')