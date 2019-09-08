@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Panel rejestracji</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Imie użytkownika</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

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
                                <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required>

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
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('albumnumber') ? ' has-error' : '' }}">
                            <label for="albumnumber" class="col-md-4 control-label">Numer albumu</label>

                            <div class="col-md-6">
                                <input maxlength="5" id="albumnumber" type="number" class="form-control" name="albumnumber" value="{{ old('albumnumber') }}" required autofocus>

                                @if ($errors->has('albumnumber'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('albumnumber') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Hasło</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Powtórz hasło</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>




                        <div class="form-group{{ $errors->has('typestudy') ? ' has-error' : '' }}">
                            <label for="typestudy" class="col-md-4 control-label">Tok nauki</label>

                            <div class="col-md-6">
                                <select id="typestudy" class="form-control" name="typestudy" required autofocus>
                                    <option>Stacjonarne</option>
                                    <option>Niestacjonarne</option>
                                </select>

                                @if ($errors->has('typestudy'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('typestudy') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('levelstudy') ? ' has-error' : '' }}">
                            <label for="levelstudy" class="col-md-4 control-label">Poziom nauki</label>

                            <div class="col-md-6">
                                <select id="levelstudy" class="form-control" name="levelstudy" required autofocus>
                                    <option>Inżynierskie</option>
                                    <option>Magisterskie</option>
                                </select>

                                @if ($errors->has('levelstudy'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('levelstudy') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('department') ? ' has-error' : '' }}">
                            <label for="department" class="col-md-4 control-label">Wydział</label>

                            <div class="col-md-6">
                                <select id="department" class="form-control" name="department" required autofocus>
                                    <option>Mechaniczny</option>
                                    <option>Elektroniki i Informatyki</option>
                                    <option>Budownictwa i Architektury</option>
                                    <option>Inżynierii Środowiska</option>
                                    <option>Zarządzania</option>
                                    <option>Podstaw Terchniki</option>
                                </select>

                                @if ($errors->has('department'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('department') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('direction') ? ' has-error' : '' }}">
                            <label for="directiont" class="col-md-4 control-label">Wydział</label>

                            <div class="col-md-6">
                                <select id="direction" class="form-control" name="direction" required autofocus>
                                    <option>Budownictwo</option>
                                    <option>Architektura</option>
                                    <option>Elektrotechnika</option>
                                    <option>Informatyka</option>
                                    <option>Mechatronika</option>
                                    <option>Inżynieria biomedyczna</option>
                                    <option>Inżynieria odnawialnych źródeł energii</option>
                                    <option>Inżynieria środowiska</option>
                                    <option>Mechanika i budowa maszyn</option>
                                    <option>Inżynieria materiałowa</option>
                                    <option>Mechatronika</option>
                                    <option>Transport</option>
                                    <option>Inżynieria produkcji</option>
                                    <option>Robotyzacja procesów wytwórczych</option>
                                    <option>Matematyka</option>
                                    <option>Edukacja techniczno-informatyczna</option>
                                    <option>Inżynieria bezpieczeństwa</option>
                                    <option>Zarządzanie</option>
                                    <option>Finanse i rachunkowość</option>
                                    <option>Marketing i komunikacja rynkowa</option>
                                    <option>Inżynieria logistyki</option>
                                </select>

                                @if ($errors->has('direction'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('direction') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>




                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Zarejestruj
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
