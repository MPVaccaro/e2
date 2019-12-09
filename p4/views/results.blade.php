@extends('templates.master')

@section('title')
    Results
@endsection

@section('content')

    @if($app->old('gameNotFound'))
        <div class='alert alert-warning'>    
        Sorry, the game you were looking for is not available.
        </div>    
    @endif

    <body>
        
    <h3>Here are the Results for all the Games Played</h3>

    <ul>

        @foreach($games as $game)
            <div class='review'>
            <li>
                <a href='/resultdetails?id={{ $game['id'] }}'><b>{{ $game['goal'] }} </b></a>
                <br>
                 {{ $game['goal'] }} 
                <br>
                {{ $game['section'] }} 
                <br>
                {{ $game['result'] }}
            </li>
            <br>
            </div>
        @endforeach
     </ul>

<!--      {{ dump($games) }}-->
       
      
    </body>
    </html>

@endsection