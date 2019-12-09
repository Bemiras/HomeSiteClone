@extends('layouts.app')




@section('content')

<h2  style="text-align: center">PANEL - Dodanie wydziału    </h2></br>


<div class="panel-body"  style="text-align: center">

<form action="{{ action('DepartmentofferController@store') }}" method="post" role="form" >
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

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


    <input type="submit" value="Dodaj" class="btn btn-primary" />
    <a href="{{ action('DepartmentofferController@index') }}" class="btn btn-link">Wróc</a>
</form>

</div>

@endsection('content')