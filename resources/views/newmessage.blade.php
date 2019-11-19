
@extends('layouts.app')
@section('content')


@section('content')
<h2 style="text-align: center">PANEL - Nowa Wiadomość</h2>


<div class="panel-body" align="center">
    @foreach ($userlist as $user)
    <form action="{{ action('MessageController@sendMessage', $user->id) }}" method="post" role="form" >
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />


        <label for="title">Nowa wiadomość do: {{$user->student_name}} {{$user->student_lastname}} ({{$user->student_id}})</label>
        <div>
            <textarea name="message" style="width: 40%;" rows="10" cols="30" ></textarea>
        </div></br>

        </br>
        @endforeach
        <input type="submit" value="Wyślij wiadomość" class="btn btn-primary" />
        <a href="{{ action('MessageController@index') }}" class="btn btn-link">Wróc</a>
    </form>

</div>


@endsection('content')
@endsection