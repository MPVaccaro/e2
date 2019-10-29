<?php
$forms = ["Butterfly", "Flower", "Dragon", "Crane", "Snake", "Iron Palm", "Tiger", "Leopard", "Dragon's Tail"];
$students = ['Liz', 'Maya', 'Mary', 'Dennis', 'Rebecca'];
$finalForm = $forms[count($forms) - 1];
# This is where we'll correct our results
# Each key will be a student name
# And each value will be an array with keys 'highest form' (string) and 'blackbelt' (boolean)
$results = [];
$test = ["pass", "pass", "fail"];
$blackbeltWinners = [];
$blackbeltCount = 0;
# Each student...
foreach ($students as $student) {
    # Initialize each student's values with the first form
    $results[$student]['highest form'] = $forms[0];
    # Assume no blackbelt at start
    $results[$student]['blackbelt'] = false;
    
    # Performs each test (stopping at the first failed test)
    foreach ($forms as $key => $form) {
        $passOrFail = $test[rand(0, 2)];
        if ($passOrFail == "pass") {
            # Update their results
            $results[$student]['highest form'] = $form;
            $blackbelt = $form == $finalForm;
            $results[$student]['blackbelt'] = $blackbelt;
            if ($blackbelt) {
                $blackbeltCount++;
                $blackbeltWinners[] = $student;
            }
        } else {
            # If they failed the test, the loop through the forms stops
            break;
        }
    }
}
# All winners will be set to true if $blackbeltCount equals how many students there are
# Otherwise, it will be set to false
$allWinners = $blackbeltCount == count($students);
$noWinners = $blackbeltCount == 0;