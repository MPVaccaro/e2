<?php require 'p3-index-controller.php'; ?>
<!doctype html>
<html lang='en'>

<head>

    <title>Tai Chi Class</title>
    <meta charset='utf-8'>
    <link href="css/butterfly.css" rel="stylesheet">

</head>

<body>

    <h1>Tai Chi Class</h1>
        <img src="images/MonarchButterfly.jpg" alt="Monarch Butterfly" width="100" /> 

    <h2>Instructions</h2>
        <p>Welcome to Tai Chi.  First, let us know the main reason you would like to learn Tai Chi.
        </p>    

    <form method='GET' action='p3-process.php'>
       
        <p>What is your main reason for trying Tai Chi today?</p>

        <label for="reasons">Main Reason</label>
        <select required id="reasons" name="reasons">
            <option value="">Choose one...</option>
            <option value="Better balance">Better Balance</option>
            <option value="Stress reduction">Stress Reduction</option>
            <option value="Doctor's recommendation">Doctor's Recommendation</option>
            <option value="Easy exercise">Easy Exercise</option>
            <option value="Improved focus">Improved Focus</option>
            <option value="I thought it might be fun">Thought it might be fun</option>
            <option value="I wanted to see what it was">I Wanted to See What it Was</option>
        </select>

        <p>Now that we know your main reason for learning Tai Chi, let's begin.</p>    
        <p>Each time you come to class, you will remind us of your main reason to try Tai Chi, then we will teach you a section of the form.</p>
        <p>When you complete the entire form, we will celebrate by teaching you the sabre form!</p>    

        <h2>Sections You will Learn in this Series of Classes</h2>    
        <p>Each section of the Tai Chi form consists of many individual moves. Below is a list of the main sections you will learn in this class: </p>  
     
        <ul>
        <li>Grasp the Bird's Tail</li> 
        <li>Repulse the Monkey</li>
        <li>Golden Eagle Cools its Wing</li>
        <li>Cloud Hands</li>
        <li>Lotus Kick</li>
        <li>Four Corners</li>
        <li>Fair Lady Works the Shuttles</li>
         </ul>   
        
        <button type='submit'>Learn a new section</button>  
        
    </form>

        <?php if ($showResults) { ?>
    
            <p class='reason'>Your main reason for learning Tai Chi is: <?php echo $results['reasons']; ?>.</p>    
        
            <p class="loser" >You just learned: <?php echo $results['newMove']; ?></p>
    
            <?php if ($results['winner']) { ?>
        
            <p class='winner'>You learned the entire Tai Chi form. Now you get to begin the Sabre! <br> <br/>
            <img src="images/Summer-Tai-Chi_July-17-2019_800px.png" alt="Tai Chi Sabre Practice" width="400"/> </p>
    
            <?php } else { ?>
    
            <p class='loser'>Good work! You learned <?php echo $results['newMove']; ?>. We'll see you at your next Tai Chi class. <br> 
            <img src="images/Tai-Chi-training_Sept-2019_800px.jpg" alt="Tai Chi Practice" width="200"/></p>
    
            <?php } ?> 
    
        <?php } ?>

</body>

</html>