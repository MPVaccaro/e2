@extends('templates.master')

@section('title')
    MyResult
@endsection

@section('body')
    <main>
        
        <h3>Here's Your Result:</h3>
        <p>
            <div class='review'>            
            <font color='red'><b>You Just Learned {{ $games['section'] }} </b></font>           
            <br>
            </div>

            @if ($games['result'] == "Is Ready for the Next Move in the Tai Chi Form") 
               
                <p>
                Good work!<br>
                Now you're ready to learn the the next move in the Tai Chi form.<br>
                We'll begin teaching you your new move in your next class.
                </p>
                <p><img src="images/Tai-Chi-training-Sept-2019-800px.jpg" alt="Tai Chi Form Practice" width="400" />
                </p>                
            
            @elseif ($games['result'] == "Is Ready for the Next Goal") 
                <b>Congratulations!!</b><br>
                <p>Learning the entire Tai Chi form is a great accomplishment.<br>
                Along with constantly improving the form that you now know,<br>
                you can also begin learning the weapons forms, Kung Fu and practicing Zazen.<br> 
                You are just beginning your Nabi Su martial arts practice.<br>
                There is so much more to enjoy!<br>
                </p>
                <p><img src="images/MonarchButterfly.jpg" alt="Tai Chi Red Wings" width="400" />
                </p>                
    
             @endif
        
        <p>
        <br>        
        <a href='/results'>See all Game Results &rarr;</a>
        </p>    
      
    </main>
@endsection