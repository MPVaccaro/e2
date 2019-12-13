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
        
    <h3>Here are the Results for all Games Played:</h3>
    <p>
    <ul>

        @foreach($games as $game)
            <div class='review'>
            <li>
                <a href='/resultdetails?id={{ $game['id'] }}'><b>Player # {{ $game['id'] }} </b></a>
                <br><font color='#cc6600'>Learned {{ $game['section'] }} </font>
                <br>And is interested in<br> <font color='#cc6600'> {{ $game['goal'] }}</font>

            </li>
            <br>
            </div>
        @endforeach
     </ul>

<!--      {{ dump($games) }}-->
       
      
    </body>
    </html>

@endsection