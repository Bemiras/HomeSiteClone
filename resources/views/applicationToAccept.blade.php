@extends('layouts.app')

@section('content')

<h2 style="text-align: center">Podania o zmianę danych</h2>

                    @if(Auth::check() && Auth::user()->role == 'administrator')
                    @if(!count($dataBase) == 0)
                        <div class="panel-heading">  </div>
                            <table align="center"  style="width: 40%;" class="table">
                                <thead>
                                <tr>
                                    <th>Numer studenta/pracownika</th>
                                    <th>Rola</th>>
                                    <th>Imię</th>
                                    <th>Nazwisko</th>
                                    <th>Wydział</th>
                                    <th>Kierunek</th>
                                    <th>Akceptuj</th>
                                    <th>Odrzuć</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($dataBase as $data)
                                <tr>
                                        <th scope="row">{{$data->user_id}}</th>
                                        <th>{{$data->role}}</th>
                                        <th>{{$data->old_name}}          <br /> --- <br /> {{$data->name}}</th>
                                        <th>{{$data->old_lastname}}      <br /> --- <br /> {{$data->lastname}}</th>
                                        <th>{{$data->name_department}}    <br /> --- <br /> {{$data->name_department}}</th>
                                        <th>{{$data->name_direction}}     <br /> --- <br /> {{$data->name_direction}}</th>
                                        <th>
                                            <form class="form-horizontal"  method="POST" name="acceptEditChange" action="/acceptEditChange/{{($data->user_id)}}">
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-primary">Accept</button>
                                            </form>
                                        </th>
                                        <th>
                                            <form class="form-horizontal"  method="post" name="dismissEditChange" action="/dismissEditChange/{{$data->user_id}}">
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-primary">Odrzuć</button>
                                            </form>
                                        </th>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                    @else
                        <div class="panel-heading" align="center"> nic do akceptowania. </div>
                    @endif
                    @endif
@endsection('content')


