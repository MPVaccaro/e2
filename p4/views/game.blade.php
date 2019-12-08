@extends('templates.master')

@section('title')
    Game
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

    <body>
    <p>Game page: Thank you for giving us your reason. Now you're ready to play the game!</p>    
    </body>
    </html>

@endsection
