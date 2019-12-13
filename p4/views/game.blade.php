@extends('templates.master')

@section('title')
    Game
@endsection

@section('content')

    <body>
        <img src="images/MonarchButterfly.jpg" alt="Monarch Butterfly" width="100" /> 
        <h1>Game</h1>
        
    
        <p>Now that you've given us your reason for trying Tai Chi, you can begin the game!</p> 
        
        <h4>Instructions</h4>
        <p>Each time you come to class, we will teach you a section of the form. Each section of the Tai Chi form consists of many individual moves. Below is a list of the main sections you will learn in this class: </p>  
     
        <ul><font color="#cc6600"><i>
        <li>Grasp the Bird's Tail</li> 
        <li>Repulse the Monkey</li>
        <li>Golden Eagle Cools its Wing</li>
        <li>Cloud Hands</li>
        <li>Lotus Kick</li>
        <li>Four Corners</li>
        <li>Fair Lady Works the Shuttles</li>
         </i></font></ul>   
        
        <p> When you complete the entire form, we will celebrate by teaching you the thing you would like to learn next.</p>       
        
        <p>Now, let us know what you would like to learn next:
        </p>
        
        <form method='POST' id='form' action='/save-new-game'>

            <label for="goal"><b>Your Class Goal</b></label><br>
            <select required id="goal" name="goal">
                <option value="">Choose one...</option>
                <option value="Escrima Sticks">Escrima Sticks</option>
                <option value="Sabre">Sabre</option>
                <option value="Sword">Sword</option>
                <option value="Fan">Fan</option>
                <option value="Spear">Spear</option>
                <option value="Jo (Short Staff)">Jo (short staff)</option>
                <option value="Bo (Long Staff)">Bo (long staff)</option>
                <option value="Lightening Sabre">Lightening Saber</option>
                <option value="Sai">Sai</option>
                <option value="Butterfly Knives">Butterfly Knives</option>
                <option value="Kung Fu">Start Kung Fu</option>
                <option value="Zazen">Zazen</option>
            </select>
            <p>
            <br>
            Okay. Let's begin.</p>  
            <button type='submit'>Click here to take your Tai Chi class</button>  
        </form> 
        

        <p>
            
        </p>    
   
        
    </body>
    </html>

@endsection
