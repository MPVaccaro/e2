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
    <hr>    

    @foreach($games as $game)
        <div class='review'>   
        <a href='/resultdetails?id={{ $game['id'] }}'><b>Game # {{ $game['id'] }} </b></a>
        <br>This Tai Chi Student Learned<br><b id="special1" > {{ $game['section'] }} </b>
        <br>And is interested in<br><b id="special2"> {{ $game['goal'] }}</b> 
        <br>
        <hr>         
        </div>
    @endforeach

    <a href='/'>&larr; Go back to the home page.</a> 

    </main>
@endsection