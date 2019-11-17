@extends('layouts.app')

@section('content')

<h2 style="text-align: center">Podania o zmianę danych</h2>

                    @if(Auth::check() && Auth::user()->role == 'administrator')
                    @if(!count($dataToChange) == 0)
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
                                @foreach ($dataToChange as $data)
                                <tr>
                                        <th scope="row">{{$data->user_id}}</th>
                                        <th>{{$userData[($data->user_id) -1]->role}}</th>
                                        <th>{{$userData[($data->user_id) -1]->name}}          <br /> --- <br /> {{$data->name}}</th>
                                        <th>{{$userData[($data->user_id) -1]->lastname}}      <br /> --- <br /> {{$data->lastname}}</th>
                                        <th>{{$userData[($data->user_id) -1]->department}}    <br /> --- <br /> {{$data->department}}</th>
                                        <th>{{$userData[($data->user_id) -1]->direction}}     <br /> --- <br /> {{$data->direction}}</th>
                                        <th>
                                            <form class="form-horizontal"  method="POST" name="acceptEditChange" action="/acceptEditChange/{{($data->user_id)}}">
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-primary">Accept</button>
                                            </form>
                                        </th>
                                        <th>
                                            <form class="form-horizontal"  method="post" name="dismissEditChange" action="/acceptEditChange/{{$data->user_id}}">
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


