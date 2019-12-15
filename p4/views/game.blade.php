@extends('templates.master')

@section('title')
    Game
@endsection

@section('body')
    <main> 
        <img src="images/MonarchButterfly.jpg" alt="Monarch Butterfly" width="100" /> 
        <h1>Game</h1>
            
        <p>Now that you've given us your reason for trying Tai Chi, you can begin the game!</p> 
        
        <h4>Instructions</h4>
        <p>Each time you come to class, we will teach you a section of the form. Each section of the Tai Chi form consists of many individual moves.</p>
        <p>Below is a list of the main sections you will learn in this class: </p>  
     
        <font color="#cc6600"><i>
        Grasp the Bird's Tail<br> 
        Repulse the Monkey<br>
        Golden Eagle Cools its Wing<br>
        Cloud Hands<br>
        Lotus Kick<br>
        Four Corners<br>
        Fair Lady Works the Shuttles<br>
        <br>    
        </i></font>  
        
        <p>After you learn a section of the form, we will tell you more about an aspect of Nabi Su Martial Arts training that might interest you.</p>
            
        <p>What else might you be interested in?
        </p>
        
        <form method='POST' id='form' action='/save-new-game'>

            <label for="goal"><b>Your Next Goal</b></label><br>
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
                <option value="Two-Person Form">Two-Person Form</option>
                <option value="Kung Fu">Start Kung Fu</option>
                <option value="Zazen">Zazen</option>
            </select>
            <p>
            <br>
            Okay. Let's begin.<br>
            Click below to see what move you've learned and find out what you're ready to learn next.<br></p>  
            <button type='submit'>Click here to take your Tai Chi class
            </button>
        </form> 
       </main> 
    </html>

@endsection
