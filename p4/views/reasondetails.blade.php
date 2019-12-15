@extends('templates.master')

@section('title')
    {{ $reason['name'] }}
@endsection

@section('content')
    <body>
        
    <h2>Details of Reasons</h2>  
    <h4>{{ $reason['name'] }}</h4>
    <p>
    <font color='#cc6600'>{{ $reason['benefit'] }}</font>
    </p>
    <p>
    {{ $reason['content'] }}
    </p>    
    <p>  <a href='/reasons'>&larr; Go back to the reasons list.</a>
    </p>    
    </body>

    </html>

@endsection