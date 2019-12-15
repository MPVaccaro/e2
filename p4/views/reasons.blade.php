@extends('templates.master')

@section('title')
    Reasons
@endsection

@section('content')

    @if($app->old('reasonNotFound'))
        <div class='alert alert-warning'>    
        Sorry, the name you were looking for is not available.
        </div>    
    @endif

    <body>
        
    <h3>Here are the Reasons People Want to try Tai Chi</h3>
    <p><i>(Click the link to see the full comments.)</i>
    </p>

        @foreach($reasons as $reason)
            <p>   
                <div class='review'>
                <a href='/reasondetails?id={{ $reason['id'] }}'><b>{{ $reason['name'] }} </b></a>
                <br>
                {{ $reason['benefit'] }} 
                <br>
            </p>        
            </div>
        @endforeach
             
    </body>
    </html>

@endsection