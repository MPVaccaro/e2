@extends('templates.master')

@section('title')

    {{ $game['goal'] }}

@endsection

@section('content')
    <body>
        <h1>Game Result Details</h1>
        <img src="images/MonarchButterfly.jpg" alt="Monarch Butterfly" width="100" />
        <br> 
        
        <p>
        <br>
        <b><font color='#cc6600'>Player # {{ $game['id'] }} </font></b><br>
                
        <br>Learned {{ $game['section'] }}
        <br>And {{ $game['result'] }}
        <br>
        <br>Since this player expressed interest in<font color='#cc6600'> {{ $game['goal'] }}</font>, here is some information about it:
        </p>
        
<!--        <h4>{{ $game['goal'] }}-->

        
               @if ($game['goal'] == "Escrima Sticks") 
               
                    The first weapons that the student meets at Nabi Su are the escrima sticks. We practice these as a practical, light, short (26 to 28 inches), and relatively simple self-defense tool. With a small amount of familiarity with these, the student becomes more confident handling any object that may be convenient, should they ever need to protect themselves against attack.  
                
                @elseif ($game['goal'] == "Sabre") 
               
                    This is about the Sabre.
            
                @elseif ($game['goal'] == "Sword")
        
                    This is about the Sword.
                        
                @elseif ($game['goal'] == "Fan")
        
                    This is about the Fan.
                 
                @elseif ($game['goal'] == "Spear")
        
                    This is about Spear.

                @elseif ($game['goal'] == "Jo (Short Staff)")
        
                    Jo is a short staff used in the art of Jodo, the art of wooden staff against long and short swords, a tradition comprising 64 forms dating back to the Samurai and attributed to Myamoto Mushashi. Jodo is elegantly simple, requiring and developing great concentration and power.
                        
                @elseif ($game['goal'] == "Bo (Long Staff)")
        
                    The Bo is a 6-foot staff taught via the form called "Dragon's Tail,"" a form that is complex and beautiful.
                 
                @elseif ($game['goal'] == "Lightening Sabre")
        
                    This is about the Lightening Sabre.

                @elseif ($game['goal'] == "Sai")
        
                    This is about the Sai.
                        
                @elseif ($game['goal'] == "Butterfly Knives")
        
                    This is about the Butterfly Knives.
                 
                @elseif ($game['goal'] == "Kung Fu")
        
                    <b>Kung Fu</b>, Nabi Su's most active practice, invigorates and strengthens, with a side benefit of self defense skill.

                 
                @elseif ($game['goal'] == "Zazen")
        
                    <b>Zazen</b> is sitting meditation that is silent and still, focusing on breathing and mindfulness.
                
                @endif
            
    
        </p>
        <br>
        <p>
        </p>
        
        <p>  <a href='/results'>&larr; Go back to the game results list.</a>
        </p>
        
    </body>


    </html>

@endsection