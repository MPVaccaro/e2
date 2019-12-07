@extends('templates.master')

@section('title')
Home
@endsection

@section('content')

@if($app->errorsExist())
<ul class='error alert alert-danger'>
    @foreach($app->errors() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@else
<div class='alert alert-success'>    
Thank you, {{ $confirmationName }}, for your reason!
</div>    
@endif 
    
<!--    <h2>{{ $welcome }}</h2>-->

    <p>Welcome to the index page! This is the boilerplate splash page for my application built with  <a href='https://github.com/susanBuck/e2framework'>e2framework</a>.</p>

    
     <form method='POST' id='product-review' action='/products/save-review'>
        <h3>Tell Us Your Reason for Trying Tai Chi</h3>
<!--        <input type='hidden' name='id' value='{{ $product["id"] }}'>-->
        <div class='form-group'>
            <label for='name'>Your Name</label>
            <input type='text' class="form-control" name='name' id='name' value='{{ $app->old("name") }}'>
        </div>

        <div class='form-group'>
            <label for='content'>Reason</label>
            <textarea name='content' id='content' class='form-control'>{{ $app->old('content') }}</textarea>
        </div>

        <button type='submit' class='btn btn-primary'>Submit Reason</button>
    </form>
    
    <h3>Reasons</h3>

    @if($reasons)

    @foreach($reasons as $reason)
    
    <div class='review'>
        <span class='review-name' ><b>{{ $reason['name'] }}</b></span>
        <p>{{ $reason['content'] }}</p>
    </div>    
    
    @endforeach


    @else
    You must tell us your reason for trying Tai Chi in order to play the game!
    @endif
    

    <a href='/products'>&larr; Return to all products</a>


@endsection