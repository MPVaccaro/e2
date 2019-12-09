@extends('templates.master')

@section('title')

    {{ $game['goal'] }}

@endsection

@section('content')
    <body>
    <h2>Details of Games</h2>  
    <h4>{{ $game['goal'] }}</h4>
     <p>
        {{ $game['section'] }}
    </p>       
    <p>
        {{ $game['result'] }}
    </p>
        
    <p>  <a href='/results'>&larr; Go back to the game results list.</a>
    </p>    
    </body>


    </html>

@endsection