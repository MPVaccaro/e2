@extends('templates.master')

@section('title')
Home
@endsection

@section('content')
    
    <h1>Welcome to Your Tai Chi Game!</h1>
  <img src="images/MonarchButterfly.jpg" alt="Monarch Butterfly" width="100" /> 
    <p>
    <br>    
    This game is designed to find out why you are interested in Tai Chi<br>
    and to introduce you to the various aspects of martial arts practice at Nabi Su.<br>The game begins with a few questions, and ends with a brief description<br>
    of something you might be interested in as a student at Nabi Su.   
    </p>
    <p>Ready to Begin?<br>   
    <a href='/reasonform'>Start the Game Now! &rarr;</a>
    </p> 
    <p>Want to find out why others are trying Tai Chi?<br>    
    <a href='/reasons'>See the Reasons People are trying Tai Chi &rarr;</a>
    </p>    

@endsection