<?php
session_start();
$winner = null;
$move = ["Grasp the Bird's Tail", "Repulse the Monkey", "Golden Eagle Cools its Wing", "Cloud Hands", "Lotus Kick","Four Corners", "Fair Lady Works the Shuttles", "The Whole Form!!", "The Whole Form!!", "The Whole Form!!",];
$choice = $_GET['choice'];
$reasons = $_GET['reasons'];
$newMove = $move[rand(0, 9)];
$currentMove = $newMove;

if ($newMove == "The Whole Form!!") {
    $winner = true;
} else {
    $winner = false;
}
$results = [
    'winner' => $winner,
    'flip' => $flip,
    'choice' => $choice,
    'reasons' => $reasons,
    'newMove' => $newMove,
    'currentMove' => $currentMove,
];
$_SESSION['results'] = $results;
header('Location: tc-index.php');