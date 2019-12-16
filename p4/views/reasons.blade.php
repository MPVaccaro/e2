@extends('templates.master')

@section('title')
    Reasons
@endsection

@section('body')

    <main>
        
    @if($app->old('reasonNotFound'))
        <div class='alert alert-warning'>    
        Sorry, the name you were looking for is not available.
        </div>    
    @endif
   
    <h3>Here are the Reasons People Want to try Tai Chi</h3>
    <p><i>(Click the link to see the full comments.)</i>
    </p>

        @foreach($reasons as $reason)
            <hr>
            <p>    
                <div class='review'>
                <a href='/reasondetails?id={{ $reason['id'] }}'><b>{{ $reason['name'] }} </b></a>
                <br>
                {{ $reason['benefit'] }} 
                <br>        
                </div>
            </p>
        @endforeach
      <hr>
    <a href='/'>&larr; Go back to the home page.</a> 
    
    </main>
@endsection