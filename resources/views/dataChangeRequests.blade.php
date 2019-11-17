@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edycja Danych</div>
                <div class="panel-body">
                    @if(!count($isDataToChangeExist) == 0)
                    <div class="panel-heading"> Po wysłaniu danych do edycji należy poczekać na potwierdzenie przez Administatora. </div>
                    @else
                    <form class="form-horizontal" method="POST" action="/sendApplicationForChangingData">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Imie użytkownika</label>

                            <div class="col-md-6">
                                <input id="name" type="text" style="color: #C0C0C0" class="form-control" name="name" value="{{ Auth::user()->name }}" required autofocus>
                                @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                            <label for="lastname" class="col-md-4 control-label">Nazwisko użytkownika</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" style="color: #C0C0C0" class="form-control" name="lastname" value="{{ Auth::user()->lastname }}" required>

                                @if ($errors->has('lastname'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Adres E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" style="color: #C0C0C0" class="form-control" name="email" value="{{ Auth::user()->email }}" required>

                                @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        @if (Auth::user()->role == 'student')
                        <div class="form-group{{ $errors->has('department') ? ' has-error' : '' }}">
                            <label for="department" class="col-md-4 control-label">Wydział</label>

                            <div class="col-md-6">
                                <select id="department" class="form-control" name="department" required autofocus>
                                    @foreach($departments_array as $data)
                                    <option value="{{$data->id}}">{{$data->name}}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('department'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('department') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        @endif

                        @if (Auth::user()->role == 'student')
                        <div class="form-group{{ $errors->has('direction') ? ' has-error' : '' }}">
                            <label for="directiont" class="col-md-4 control-label">Kierunek</label>

                            <div class="col-md-6">
                                <select id="direction" class="form-control" name="direction" required autofocus>
                                    @foreach($directions_array as $data)
                                    <option value="{{$data->id}}">{{$data->name}}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('direction'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('direction') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        @endif

                        @if (Auth::user()->role == 'student')
                        <div class="form-group{{ $errors->has('levelstudy') ? ' has-error' : '' }}">
                            <label for="levelstudy" class="col-md-4 control-label">Poziom nauki</label>

                            <div class="col-md-6">
                                <select id="levelstudy" class="form-control" name="levelstudy" required autofocus>
                                    @foreach($levelsstudy_array as $data)
                                    <option value="{{$data->id}}">{{$data->name}}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('levelstudy'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('levelstudy') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        @endif

                        @if (Auth::user()->role == 'student')
                        <div class="form-group{{ $errors->has('typestudy') ? ' has-error' : '' }}">
                            <label for="typestudy" class="col-md-4 control-label">Tok nauki</label>

                            <div class="col-md-6">
                                <select id="typestudy" class="form-control" name="typestudy" required autofocus>
                                    @foreach($typesstudy_array as $data)
                                    <option value="{{$data->id}}">{{$data->name}}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('typestudy'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('typestudy') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        @endif

                        <div class="panel-heading" style="color: #C0C0C0"> Po wysłaniu danych do edycji należy poczekać na potwierdzenie przez Administatora. </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Wyślij
                                </button>
                            </div>
                        </div>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
