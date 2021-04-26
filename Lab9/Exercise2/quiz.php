<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    $score = 0;
    
    if(isset($_POST["q1"]) && !empty($_POST['q1'])){
        $q1 = $_POST["q1"];
    } else {
        $q1 = "No Answer";
    }
    if(isset($_POST["q2"]) && !empty($_POST['q2'])){
        $q2 = $_POST["q2"];
    } else {
        $q2 = "No Answer";
    }
    if(isset($_POST["q3"]) && !empty($_POST['q3'])){
        $q3 = $_POST["q3"];
    } else {
        $q3 = "No Answer";
    }
    if(isset($_POST["q4"]) && !empty($_POST['q4'])){
        $q4 = $_POST["q4"];
    } else {
        $q4 = "No Answer";
    }
    if(isset($_POST["q5"]) && !empty($_POST['q5'])){
        $q5 = $_POST["q5"];
    } else {
        $q5 = "No Answer";
    }

    if($q1 == "Yagura"){
        $score++;
    }
    if($q2 == "Mud"){
        $score++;
    }
    if($q3 == "ZAFT"){
        $score++;
    }
    if($q4 == "Blaze Titan"){
        $score++;
    }
    if($q5 == "N"){
        $score++;
    }

    echo "<h1>Anime Quiz Results</h1>";

    echo "<h2>Who is the Jinchuuriki of the Three-Tails?</h2>";
    echo "<p>Your answer: " . $q1 . "<br>";
    echo "<p>Correct answer: Yagura<br>";

    echo "Where Am I?</h2>";
    echo "<p>Your answer: " . $q2 . "<br>";
    echo "<p>Correct answer: Mud<br>";

    echo "<h2>Who created the ZGMF-X10A Freedom Gundam?</h2>";
    echo "<p>Your answer: " . $q3 . "<br>";
    echo "<p>Correct answer: ZAFt<br>";

    echo "<h2>Which is not one of the Nine Titans</h2>";
    echo "<p>Your answer: " . $q4 . "<br>";
    echo "<p>Correct answer: Blaze Titan<br>";

    echo "<h2>What letter does Naruto start with?</h2>";
    echo "<p>Your answer: " . $q5 . "<br>";
    echo "<p>Correct answer: N<br>";

    echo "<h2>You correctly answered " . $score . " questions.</h2>";
    echo "<h2>Score: " . ($score*20) . "%";
?>