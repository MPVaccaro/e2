@extends('templates.master')

@section('title')
    Results
@endsection

@section('body')
    <main>
        
    @if($app->old('gameNotFound'))
        <div class='alert alert-warning'>    
        Sorry, the game you were looking for is not available.
        </div>    
    @endif 
        
    <h3>Here are the Results for all Games Played:</h3>
    <p><i>(Click the link to get full details about any particular game.)</i>
    </p>

    @foreach($games as $game)
        <div class='review'>
        <p>
        <a href='/resultdetails?id={{ $game['id'] }}'><b>Game # {{ $game['id'] }} </b></a>
        <br>This Tai Chi Student Learned<br><font color='#cc6600'> {{ $game['section'] }} </font>
        <br>And is interested in<br> <font color='green'> {{ $game['goal'] }}</font> 
        <br>
        <br>    
        </p>    
        </div>
    @endforeach
      
    </main>
@endsection