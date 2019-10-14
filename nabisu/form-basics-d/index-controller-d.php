<?php
var_dump($_GET);

$positions = ["Grasp the Bird's Tail", "Repulse the Monkey", "Lotus Kick", "Cloud Hands", "Four Corners", "Fair Lady Works the Shuttles", "Golden Eagle Cools its Wing", "The Whole Form!!", "The Whole Form!!", "The Whole Form!!", ];

foreach ($positions as $key => $move)

$move = $positions[rand(0, 9)];

 if ($move == "The Whole Form!!")     
        {  
                var_dump($move);
                $Winner = "You learned the whole Tai Chi form! Now you are ready to learn the sabre!";
         }
        
     else 
        {
            $move = $positions[rand(0, 9)];     
            var_dump($move);
            $Student = "Good work. We'll teach you another move at your next class.";
        } 
     


//session_start();
//if (isset($_SESSION['correct'])) {
//    $correct = $_SESSION['correct'];
//    $showResults = true;
//    $_SESSION['correct'] = null;
//} else {
//    $showResults = false;
//}