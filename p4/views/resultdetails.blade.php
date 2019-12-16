@extends('templates.master')

@section('title')

    {{ $game['goal'] }}

@endsection

@section('body')
    <main>
        <h1>Game Result Details</h1>
        <img src="images/MonarchButterfly.jpg" alt="Monarch Butterfly" width="100" />
        <br>         
        <p>
        <br>
        <b id="special1">Game # {{ $game['id'] }} </b>
                
        <br>This Tai Chi Student Learned <b id="special1"> {{ $game['section'] }} </b>
        <br><b id = "special2"> And {{ $game['result'] }} </b>
        <br>     
        <br>This student expressed interest in<b id="special2"> {{ $game['goal'] }}</b>.<br>
        </p>
            @if ($game['goal'] == "Escrima Sticks") 
               
                <p><img src="images/Escrima-Sticks-May-29-2018.jpg" alt="Escrima Sticks Practice" width="400" />
                </p>
                <p id = "special1">The easiest weapons that the student meets at Nabi Su are the <b>escrima sticks</b>, which are short, light, rattan sticks. We practice these as a practical and relatively simple self-defense tool. With a small amount of familiarity, the student becomes more confident handling any object that may be convenient, should they ever need to protect themselves against attack.</p>  
                
            @elseif ($game['goal'] == "Sabre") 
               
                <p><img src="images/Summer-Tai-Chi-July-17-2019-800px.png" alt="Tai Chi Sabre Practice" width="400" />
                </p>
                <p id = "special1">The <b>sabre</b> is a curved sword that is sharpened on one side only. Tai Chi sabre form is performed slowly, usually with wooden weapsons. Although done at a slow pace, this form still feels quite "swashbuckling," as it incorporates many large slices and blocks.</p>
        
            @elseif ($game['goal'] == "Sword")
        
                <p><img src="images/CMC-Sword-silhouette-Feb-11-2019.jpg" alt="Tai Chi Sword Practice" width="400" />
                </p>
                <p id = "special1">The <b>sword</b> is a straight, double-edged weapon with a sharp, pointed tip.<br>The Tai Chi sword form is elaborate and beautiful and is performed slowly, training the student in timing and accuracy. Although commonly performed using wooden weapons, the student learns traditional sword movements. This form has been described as feeling the most "philosophical" of all our martial arts training.</p>
                        
            @elseif ($game['goal'] == "Fan")
        
                <p><img src="images/Tai-Chi-Fans-1-June-2019-800px.jpg" alt="Tai Chi Fan Practice" width="400" />
                </p>
                <p id = "special1">The <b>fan</b> is a beautiful, small weapon. We use light folding fans made with wooden or metal blades. The form incorporates many strikes, blocks, turns and slicing moves. It gives students an opportunity to practice more complex footwork while focusing on elaborate strikes with complex rhythms.</p> 
        
                 
            @elseif ($game['goal'] == "Spear")
        
                <p><img src="images/Spear-Form-August-2018.jpg" alt="Spear Practice" width="400" />
                </p>
                <p id = "special1">The <b>spear</b> is a long, light, flexible, waxwood staff, with a sharp metal tip. (We practice without the sharp metal tip to prevent damage to the floor and each other.) The spear forms incorporate the basic spear moves of thrusts, blocks, strikes and stabs, along with more complex spins and trapping movements. Students learn to coordinate their timing and direction, as they work together with long weapons in the dojo</p>    

            @elseif ($game['goal'] == "Jo (Short Staff)")
    
                <p><img src="images/CMC-Jo-1981.jpg" alt="Jo Practice" width="400" />
                </p>
                <p id = "special1">The <b>Jo</b> is a short staff (4'2") used in the art of Jodo, the art of wooden staff against long and short swords, a tradition comprising 64 forms dating back to the Samurai and attributed to Myamoto Mushashi. Jodo is elegantly simple, requiring and developing great concentration and power.</p>
                        
            @elseif ($game['goal'] == "Bo (Long Staff)")        
                
                <p><img src="images/Bo-Dennis-2018.jpg" alt="Bo Practice" width="400" />
                </p>
                <p id = "special1">The <b>Bo</b> is a 6-foot staff taught via the form called "Dragon's Tail," a form that is dynamic, complex and beautiful. The Bo is relatively heavy and helps the student develop strengh and stamina while performing spins, strikes, blocks and thrusts.</p>
                 
            @elseif ($game['goal'] == "Lightening Sabre")
        
                <p><img src="images/mpv-lightening-sabre-August-2019-800px.jpg" alt="Lightening Sabre Practice" width="400" />
                </p>
                <p id = "special1">The <b>Lightening Sabre</b> is a light, thin, flexible metal sword. The form is performed at a fast speed and includes stabs, slices, turns, kicks and jumps. The flexing sword catches and reflects the light and the form is performed.</p>

            @elseif ($game['goal'] == "Sai")
        
                <p><img src="images/Dennis-Sai-Aug-2018.jpg" alt="Sai Practice" width="400" />
                </p>
                <p id = "special1">The <b>Sai</b> are a set of two metal, Okinawan farm implements. The sai forms includes many flips, traps, strikes, blocks and stabs. They help the student develop hand dexterity and arm strength.</p>
                        
            @elseif ($game['goal'] == "Butterfly Knives")
        
                <p><img src="images/Maya-Sydney-2002.jpg" alt="Butterfly Knives" width="400" />
                </p>
                <p id = "special1">The Kung Fu <b>Butterfly Knives</b>, also known the "Butterfly Swords," are a set of two metal knives, each approximately a foot long. The form is elaborate and contains many turns, slices and strikes. The Butterfly knives, which can vary greatly in weight and length, help the student develop arm and hand strength and coordination.</p>
                 
            @elseif ($game['goal'] == "Kung Fu")
                
                <p><img src="images/KF-Tiger-Form.jpg" alt="Kung Fu Tiger Form" width="400" />
                </p>
                 <p id = "special1"><b>Kung Fu</b>, which is both aerobic and muscular, is a complete exercise, using all parts of your body, moving in nearly every direction. Using a variety of fists (hand positions), you are striking and blocking close range and far, high and low; kicking front, side and back, spinning, turning, leaping. Each new form you learn expands your vocabulary of movement, giving you multiple options for spontaneous responses, surprising you with your flexibility and range. You move strongly and gracefully while gaining effective self defense skills.</p>
 
            @elseif ($game['goal'] == "Two-Person Form")
                
                <p><img src="images/Tai-Chi-Dance-Sept-2018.jpg" alt="Two-Person Tai Chi Form" width="420" />
                </p>
                <p id = "special1">The <b>Two-Person Tai Chi Form</b> is a surprisingly complex, dancelike form. This form teaches the student to apply the Tai Chi strikes, blocks and kicks in coordination with an opponent. The skills of footwork, timing and the proper use of distance under varying conditions are developed.</p>
                     
            @elseif ($game['goal'] == "Zazen")
                
                <p><img src="images/Web-cushion.jpg" alt="Zazen" width="400" />
                </p>
                <p id = "special1"><b>Zazen</b> is sitting meditation that is silent and still, focusing on breathing and mindfulness. Your posture is powerfully erect. Your deepening breathing generates internal energy. Your intuition comes alive with the silence of your mind. You are relaxed and centered.</p>
                
            @endif       
        
        <hr>
        <a href='/results'>&larr; Go back to the game results list.</a>
       
        
    </main>
@endsection