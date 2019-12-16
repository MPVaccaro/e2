@extends('templates.master')

@section('title')
    ReasonForm
@endsection

@section('body')
    <main>

        @if($newName)

            <div class='alert alert-success'>  
            <font color='red'> Thank you for your reason, {{ $newName }}.<br>Now you can play the game!</font><br><br>
            <h3><a href='/game' title="Game"> Click here to begin the game.</a></h3><br>
            </div>

        @endif 

        @if($app->errorsExist())
            <ul class='error alert alert-danger'>
            @foreach($app->errors() as $error)
            <li>{{ $error }}</li>
            @endforeach
            </ul>
        @endif  

            <h1>Play Now!
            </h1>    
            <p>In order to play the Tai Chi game, first tell us why you are interested in Tai Chi.<br></p>

        <form method='POST' id='form' action='/save-new-reason'>
            <h6 ><i>Why are You Interested in Tai Chi?</i></h6>

            <div class='form-group'>
                <label for='name'>Your Name</label>
                <input type='text' class="form-control" name='name' id='name' value='{{ $app->old('name') }}'>
            </div>

             <div class='form-group'>       
                <label for="benefit">Main Reason</label><br>
                <select required id="benefit" name="benefit">
                <option value="">Choose one...</option>
                <option value="Better balance">Better Balance</option>
                <option value="Stress reduction">Stress Reduction</option>
                <option value="Doctor's recommendation">Doctor's Recommendation</option>
                <option value="Easy exercise">Easy Exercise</option>
                <option value="Improved focus">Improved Focus</option>
                <option value="I thought it might be fun">Thought it Might be Fun</option>
                <option value="I wanted to see what it was">I Wanted to See What it Was</option> 
                <option value="I tried it years ago and liked it">I Tried it Years Ago and Liked It</option>
                <option value="It looks beautiful">It Looks Beautiful</option>
                <option value="Friend's Recommendation">Friends Told Me About It</option>                
                <option value="Other">Other</option>   
                </select>
            </div>  

            <div class='form-group'>
                <label for='content'>More Details:</label>
                <textarea name='content' id='content' class='form-control'>{{ $app->old('content') }}</textarea>
            </div>

            <button type='submit' class='btn btn-primary'>Submit Reason</button>
        </form>            
        
    </main>
@endsection

