<?php require 'index-controller-d.php'; ?>
<!doctype html>
<html lang='en'>

<head>

    <title></title>
    <meta charset='utf-8'>
    <link href="css/butterfly.css" rel="stylesheet">

</head>

<body>

    <form method='GET' action='process-d.php'>
        <h1>Tai Chi Class        </h1>
        <img src="images/MonarchButterfly.jpg" alt="Monarch Butterfly" width="100" />   
        <p>What is your reason for trying Tai Chi?</p>

        <label for='reasons'>My Reasons</label>
        <select id='reasons' name='reasons'>
            <option>Choose one...</option>
            <option>Better Balance</option>
            <option>Stress Reduction</option>
            <option>Doctor Recommendation</option>
            <option>Easy Exercise</option>
            <option>Improved Focus</option>
            <option>Thought it might be fun</option>
            <option>I Wanted to See What it Was</option>
        </select>
<!--        <button type='submit'>Submit</button>-->
       
        
        <p>Mystery word: gnaY</p>
        <p>Hint: The Most Common Style</p>
        
        <label for='answer'>Your guess:</label>
        <input type='text' name='answer' id='answer'>

        <button type='submit'>Check answer</button>
    </form>
    
    <h3>Tai Chi Student Progress</h3>
     <p>
        <em><?php echo $Winner; ?></em><br/>
          <em><?php echo $Student; ?></em><br/>
        <br/>

<!--
    <?php if($showResults) { ?>
        <?php if ($correct) { ?>
        You got it!
        <?php } else { ?>
        Sorry, you are incorrect :(
        <?php } ?>
    <?php } ?>
-->

</body>

</html>