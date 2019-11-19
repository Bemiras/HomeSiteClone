
@extends('layouts.app')
@section('content')


@section('content')
<h2 style="text-align: center">PANEL - Nowa Wiadomość</h2>


<div class="panel-body" align="center">
    @foreach ($userlist as $user)
    <form action="{{ action('MessageController@sendMessage', $user->student_id) }}" method="post" role="form" >
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />


        <div name="sender" >{{ Auth::user()->id }}</div>
        <label name="recipient" >value = "{{$user->student_id}}"</label>


        <div>
            <textarea name="message" style="width: 40%;" rows="10" cols="30" ></textarea>
        </div></br>
        <div>
            <textarea name="sender" style="width: 40%;" rows="10" cols="30" ></textarea>
        </div></br>
        <div>
            <textarea name="recipient" style="width: 40%;" rows="10" cols="30" ></textarea>
        </div></br>

        </br>
        @endforeach

        <input type="submit" value="Wyślij wiadomość" class="btn btn-primary" />
        <a href="{{ action('MessageController@index') }}" class="btn btn-link">Wróc</a>
    </form>

</div>


@endsection('content')
@endsection