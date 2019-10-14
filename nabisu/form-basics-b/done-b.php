<?php require 'done-controller-b.php'; ?>
<!doctype html>
<html lang='en'>

<head>

    <title></title>
    <meta charset='utf-8'>

</head>

<body>

    <?php if ($correct) { ?>
    You got it!
    <?php } else { ?>
    Sorry, you are incorrect :(
    <?php } ?>

    <a href='index-b.php'>Play again...</a>

</body>
