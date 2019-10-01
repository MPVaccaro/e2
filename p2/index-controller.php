<?php

$forms = ["Butterfly", "Flower", "Dragon", "Crane", "Snake", "Iron Palm", "Tiger", "Leopard", "Dragon's Tail", ];

$test = ["pass", "pass", "fail",];
$lizTest = $test[rand(0, 2)];
$mayaTest = $test[rand(0, 2)];
$maryTest = $test[rand(0, 2)];
$dennisTest = $test[rand(0, 2)];
$rebeccaTest = $test[rand(0, 2)];

foreach ($forms as $key => $form)
    if ($lizTest == "pass")     
        {  
         $lizTest = $test[rand(0, 2)];        
            if ($lizTest == "pass" and $form == "Dragon's Tail")
             {
              break;
             }
        }
     elseif ($lizTest == "fail")
        {
         break;
        } 
     
$liz = $form;

foreach ($forms as $key => $form)
    if ($mayaTest == "pass")     
        {  
         $mayaTest = $test[rand(0, 2)];      
            if ($mayaTest == "pass" and $form == "Dragon's Tail")
             {
                break;
             }
        }
    elseif ($mayaTest == "fail")
        {
         break;
        } 
     
$maya = $form;

foreach ($forms as $key => $form)
    if ($maryTest == "pass")     
        {  
         $lizTest = $test[rand(0, 2)];    
            if ($maryTest == "pass" and $form == "Dragon's Tail")
             {
                break;
             }
        }
    elseif ($maryTest == "fail")
        {
        break;
        } 
     
$mary = $form;

foreach ($forms as $key => $form)
    if ($dennisTest == "pass")     
        {  
        $dennisTest = $test[rand(0, 2)];     
            if ($dennisTest == "pass" and $form == "Dragon's Tail")
             {
                break;
             }
        }
    elseif ($dennisTest == "fail")
        {
        break;
        } 
     
$dennis = $form;

foreach ($forms as $key => $form)
    if ($rebeccaTest == "pass")     
        {  
        $lizTest = $test[rand(0, 2)];       
            if ($rebeccaTest == "pass" and $form == "dragon's tail")
             {
                break;
             }
        }
    elseif ($rebeccaTest == "fail")
        {
        break;
        } 
     
$rebecca = $form;

if ($liz == "Dragon's Tail")
    {
    $lizResult = "Liz got her Black Belt! ";   
    }    
    else 
    {   
    $lizResult = NULL;
    }

if ($maya == "Dragon's Tail")
    {
    $mayaResult = "Maya got her Black Belt! ";   
    }    
    else 
    {   
    $mayaResult = NULL;
    }

if ($mary == "Dragon's Tail")
    {
    $maryResult = "Mary got her Black Belt! ";   
    }    
    else 
    {   
    $maryResult = NULL;
    }

if ($dennis == "Dragon's Tail")
    {
    $dennisResult = "Dennis got his Black Belt! ";   
    }    
    else 
    {   
    $dennisResult = NULL;
    }

if ($rebecca == "Dragon's Tail")
    {
    $rebeccaResult = "Rebecca got her Black Belt! ";   
    }    
    else 
    {   
    $rebeccaResult = NULL;
    }

if ($liz == "Dragon's Tail" or $maya == "Dragon's Tail" or $mary == "Dragon's Tail" or $dennis == "Dragon's Tail" or $rebecca == "Dragon's Tail")
    {
    $winners = "Hooray! Today we have new Black Belts. Everyone wins! Let's go out and celebrate. The teacher's treating.";
    }
    else
    {
    $winners = "No new Black Belts today. Time for everyone to go home and wash their gi.";    
    }
