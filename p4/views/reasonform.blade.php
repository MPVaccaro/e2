@extends('templates.master')

@section('title')
    ReasonForm
@endsection

@section('content')
    <body>

    @if($newName)

        <div class='alert alert-success'>  
        Thank you for your reason, {{ $newName }}. Now you can play the game!
        </div>
        
    @endif 
        
    @if($app->errorsExist())
        <ul class='error alert alert-danger'>
        @foreach($app->errors() as $error)
        <li>{{ $error }}</li>
        @endforeach
        </ul>
    @endif    
        
        <p>Reason Form</p>
       
    <form method='POST' id='product-review' action='/save-new-reason'>
        <h3>Tell Us Your Reason for Trying Tai Chi</h3>

        <div class='form-group'>
            <label for='name'>Your Name</label>
            <input type='text' class="form-control" name='name' id='name' value='{{ $app->old('name') }}'>
        </div>

        <div class='form-group'>
            <label for='content'>Reason</label>
            <textarea name='content' id='content' class='form-control'>{{ $app->old('content') }}</textarea>
        </div>

        <button type='submit' class='btn btn-primary'>Submit Reason</button>
    </form>     
        
<!--
    @if($reason)

    @foreach($reasons as $reason)
    
    <div class='review'>
        <span class='review-name' ><b>{{ $reason['name'] }}</b></span>
        <p>{{ $reason['content'] }}</p>
    </div>    
    
    @endforeach

    @else
    You must tell us your reason for trying Tai Chi in order to play the game!
    @endif
-->
       
        
    </body>
    </html>

@endsection

