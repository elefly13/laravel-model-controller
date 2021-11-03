@extends('layout.app')


@section('content')

    <div class="box-container">
        <div class="box-movie" style="display: flex">
            @foreach ($movies as $movie)
            <div class="card" style=" text-align: center; width: 500px;  background-color: gray; margin: 10px  ">   
               
                <h2>{{ $movie['title']}}</h2>
                <h3>{{ $movie['original_title']}}</h3>
                <h4>{{ $movie['nationality']}}</h4>
                <h5>{{ $movie['date']}}</h5>
                <h5>{{ $movie['vote']}}</h5>

            </div>
            @endforeach
        </div>

    </div>


@endsection