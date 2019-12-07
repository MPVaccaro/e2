@extends('templates.master')

@section('title')
    Reasons
@endsection

@section('content')


    <body>
    <h3>Here are the Reasons People Want to try Tai Chi</h3>
    
<!--        the below avoids the error message:-->    
<!--    <?php dump($reasons) ?>  -->
   

<!--        the below phrase will give a warning due to the curly brackets-->
        
<!--        {{ dump($reasons) }}-->

    <ul>
        @foreach($reasons as $reason)
        
        <li>{{ $reason['name'] }}</li>    
   
        @endforeach
     </ul>

       
       
      
    </body>
    </html>

@endsection