@extends('templates.master')

@section('title')
    MyResult
@endsection

@section('body')
    <main>
        
        <h3>Here's Your Result:</h3>
        <p>
            <div class='review'>            
            <b id = "special3">You Just Learned {{ $games['section'] }} </b>     
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
        </p>
        <p>
        <br>
        <hr>    
        <br>
            Since you were interested in<b id="special2"> {{ $games['goal'] }}</b>, here is some more information about it:</p>
        
            @if ($games['goal'] == "Escrima Sticks") 
               
                <p>The easiest weapons that the student meets at Nabi Su are the escrima sticks, which are short, light, rattan sticks. We practice these as a practical and relatively simple self-defense tool. With a small amount of familiarity, the student becomes more confident handling any object that may be convenient, should they ever need to protect themselves against attack.</p>
        
                <p><img src="images/Escrima-Sticks-May-29-2018.jpg" alt="Escrima Sticks Practice" width="200" />
                </p>
                
            @elseif ($games['goal'] == "Sabre") 
               
                <p>The sabre is a curved sword that is sharpened on one side only. Tai Chi sabre form is performed slowly, usually with wooden weapsons. Although done at a slow pace, this form still feels quite "swashbuckling," as it incorporates many large slices and blocks.</p>
        
                <p><img src="images/Summer-Tai-Chi-July-17-2019-800px.png" alt="Tai Chi Sabre Practice" width="200" />
                </p>       
        
            @elseif ($games['goal'] == "Sword")
    
                <p>The sword is a straight, double-edged weapon with a sharp, pointed tip.<br>The Tai Chi sword form is elaborate and beautiful and is performed slowly, training the student in timing and accuracy. Although commonly performed using wooden weapons, the student learns traditional sword movements. This form has been described as feeling the most "philosophical" of all our martial arts training.</p>
        
                <p><img src="images/CMC-Sword-silhouette-Feb-11-2019.jpg" alt="Tai Chi Sword Practice" width="200" />
                </p>
                        
            @elseif ($games['goal'] == "Fan")
        
                <p id = "special1">The <b>fan</b> is a beautiful, small weapon. We use light folding fans made with wooden or metal blades. The form incorporates many strikes, blocks, turns and slicing moves. It gives students an opportunity to practice more complex footwork while focusing on elaborate strikes with complex rhythms.</p>
        
                <p><img src="images/Tai-Chi-Fans-1-June-2019-800px.jpg" alt="Tai Chi Fan Practice" width="200" />
                </p>
                         
            @elseif ($games['goal'] == "Spear")
        
                <p>The spear is a long, light, flexible, waxwood staff, with a sharp metal tip. (We practice without the sharp metal tip to prevent damage to the floor and each other.) The spear forms incorporate the basic spear moves of thrusts, blocks, strikes and stabs, along with more complex spins and trapping movements. Students learn to coordinate their timing and direction, as they work together with long weapons in the dojo</p>
        
                <p><img src="images/Tai-Chi-Fans-1-June-2019-800px.jpg" alt="Tai Chi Fan Practice" width="200" />
                </p>

            @elseif ($games['goal'] == "Jo (Short Staff)")
    
                <p>The Jo is a short staff (4'2") used in the art of Jodo, the art of wooden staff against long and short swords, a tradition comprising 64 forms dating back to the Samurai and attributed to Myamoto Mushashi. Jodo is elegantly simple, requiring and developing great concentration and power.</p>
        
                <p><img src="images/CMC-Jo-1981.jpg" alt="Jo Practice" width="200" />
                </p>
                        
            @elseif ($games['goal'] == "Bo (Long Staff)")        
                
                <p>The Bo is a 6-foot staff taught via the form called "Dragon's Tail," a form that is dynamic, complex and beautiful. The Bo is relatively heavy and helps the student develop strengh and stamina while performing spins, strikes, blocks and thrusts.</p>
        
                <p><img src="images/Bo-Dennis-2018.jpg" alt="Bo Practice" width="200" />
                </p>        
                 
            @elseif ($games['goal'] == "Lightening Sabre")
        
                <p>The Lightening Sabre is a light, thin, flexible metal sword. The form is performed at a fast speed and includes stabs, slices, turns, kicks and jumps. The flexing sword catches and reflects the light and the form is performed.</p>
                
                <p><img src="images/mpv-lightening-sabre-August-2019-800px.jpg" alt="Lightening Sabre Practice" width="200" />
                </p>

            @elseif ($games['goal'] == "Sai")
        
                <p>The Sai are a set of two metal, Okinawan farm implements. The sai forms includes many flips, traps, strikes, blocks and stabs. They help the student develop hand dexterity and arm strength.</p>
                
                <p><img src="images/Dennis-Sai-Aug-2018.jpg" alt="Sai Practice" width="200" />
                </p>
        
                        
            @elseif ($games['goal'] == "Butterfly Knives")
        
                <p>The Kung Fu Butterfly Knives, also known the "Butterfly Swords," are a set of two metal knives, each approximately a foot long. The form is elaborate and contains many turns, slices and strikes. The Butterfly knives, which can vary greatly in weight and length, help the student develop arm and hand strength and coordination.</p>
                
                <p><img src="images/Maya-Sydney-2002.jpg" alt="Butterfly Knives" width="200" />
                </p>
         
            @elseif ($games['goal'] == "Kung Fu")
                
                 <p>Kung Fu, which is both aerobic and muscular, is a complete exercise, using all parts of your body, moving in nearly every direction. Using a variety of fists (hand positions), you are striking and blocking close range and far, high and low; kicking front, side and back, spinning, turning, leaping. Each new form you learn expands your vocabulary of movement, giving you multiple options for spontaneous responses, surprising you with your flexibility and range. You move strongly and gracefully while gaining effective self defense skills.</p>
                        
                <p><img src="images/KF-Tiger-Form.jpg" alt="Kung Fu Tiger Form" width="200" />
                </p>
 
            @elseif ($games['goal'] == "Two-Person Form")
                
                <p>The Two-Person Tai Chi Form is a surprisingly complex, dancelike form. This form teaches the student to apply the Tai Chi strikes, blocks and kicks in coordination with an opponent. The skills of footwork, timing and the proper use of distance under varying conditions are developed.</p>
        
                <p><img src="images/Tai-Chi-Dance-Sept-2018.jpg" alt="Two-Person Tai Chi Form" width="200" />
                </p>
                     
            @elseif ($games['goal'] == "Zazen")
                
                <p>Zazen is sitting meditation that is silent and still, focusing on breathing and mindfulness. Your posture is powerfully erect. Your deepening breathing generates internal energy. Your intuition comes alive with the silence of your mind. You are relaxed and centered.</p>
        
                <p><img src="images/Web-cushion.jpg" alt="Zazen" width="200" />
                </p>
                
            @endif
                   
        <p>
        <br>
        <hr>  
        <br>        
        <a href='/results'>See all Game Results &rarr;</a>
        </p>    
      
    </main>
@endsection