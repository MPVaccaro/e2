<?php require "p2-NEW-index-controller.php"; ?>

<!doctype html>
<html lang='en'>

<head>
    <title>Kung Fu Game Simulator</title>
    <meta charset='utf-8'>
    <link href="css/butterfly.css" rel="stylesheet">
</head>

<body>
    <h1>Kung Fu Butterfly Game Simulator</h1>

    <img src="images/MonarchButterfly.jpg" alt="Monarch Butterfly" width="100" />

    <h3>Mechanics</h3>
    <ul>
        <li>There are five Kung Fu students: Liz, Maya, Mary, Dennis and Rebecca.</li>
        <li>All five students are lined up in a row ready to perform Kung Fu forms for their Black Belt test.</li>
        <li>Each student has a two-third chance of performing each Kung Fu form perfectly, and a one-third chance of
            making a mistake.</li>
        <li>Students who perform a form perfectly move on to the next form. </li>
        <li>Students who do the form incorrectly stop moving on and go back to their previous correct form.</li>
        <li>There are a total of nine forms to be attempted: Butterfly, Flower, Dragon, Crane, Snake, Iron Palm, Tiger,
            Leopard and Dragon's Tail.</li>
        <li>Any student who performs all forms perfectly becomes a Black Belt.</li>
        <li>If any students win their Black Belt, everyone wins and the teacher treats everyone for dinner.</li>
        <li>If no students get their Black Belt, everyone goes home and does laundry.</li>
    </ul>


    <h3>Results</h3>
    <ul>
        <?php foreach ($results as $studentName => $result) { ?>

        <li><?php echo $studentName; ?>, highest form perfected:
            <?php echo $result['highest form']; ?>
        </li>
        <?php } ?>
    </ul>

    <h3>Black Belt Winners</h3>
    <p>
        <?php foreach($blackbeltWinners as $student) { ?>
        <p><?php echo $student; ?> got their black belt!</p>
        <?php } ?>

        <?php if ($allWinners) { ?>
        Hooray! Today we have <?php echo $blackbeltCount; ?> new
        Black Belts. Everyone wins! Let's go out and celebrate. The teacher's treating.
        <?php } else if($noWinners) { ?>
        No new Black Belts today. Time for everyone to go home and wash their gi.
        <? } ?>
    </p>


</body>

</html>