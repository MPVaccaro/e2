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
    
<!--        the below avoids the error message:-->    
<!--    <?php dump($reasons) ?>  -->
   

<!--        the below phrase will give a warning due to the curly brackets-->
        
<!--        {{ dump($reasons) }}-->

    <ul>

        @foreach($reasons as $reason)
            <div class='review'>
            <li>
                <a href='/reasondetails?id={{ $reason['id'] }}'><b>{{ $reason['name'] }} </b></a>
                <br>
                {{ $reason['content'] }} 
            </li>
            <br>
            </div>
        @endforeach
     </ul>

       
       
      
    </body>
    </html>

@endsection