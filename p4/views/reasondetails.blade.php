@extends('templates.master')

@section('title')
    {{ $reason['name'] }}
@endsection

@section('body')
    <main>
        
    <h2>Details of Reasons</h2>  
    <br>
    <h4>{{ $reason['name'] }}</h4>
    <p>
    <font d="special1">{{ $reason['benefit'] }}</font>
    </p>
    <p>
    {{ $reason['content'] }}
    </p>    
    <p><a href='/reasons'>&larr; Go back to the reasons list.</a>
    </p>
        
    </main>
@endsection