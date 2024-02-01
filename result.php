<?php
// Start the session to access session data
session_start();

// Check if the user is logged in; you can add this if needed
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    // Redirect to the login page or display an error message
    header("location: login.php");
    exit;
}

// Check if the score is set in the session
if (isset($_SESSION["score"])) {
    $score = $_SESSION["score"];
} else {
    $score = 0; // Default score if not set
}

// Display the score and message
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('https://cdn.pixabay.com/photo/2022/05/12/16/04/trees-7191822_640.png');
            background-size: cover;
            background-repeat: no-repeat;
        }
        .result-box {
            text-align: center;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="result-box">
    <?php
    // Get the user's score from the session
    $score = $_SESSION["score"];

    // Display a message based on the score range
    if ($score >= 0 && $score <= 4 ) {
        echo "Your score is : ".$score."<br> Your score indicates that you have <span style='color: green; font-size:18px'>Minimal or No Depression</span>.";
    } elseif ($score >= 5 && $score <= 9) {
        echo "Your score is : ".$score."<br> Your score indicates that you may have <span style='color: orange; font-size:18px'>Mild Depression</span>.";
    } elseif ($score >= 10 && $score <=14) {
        echo "Your score is : ".$score."<br> Your score indicates that you may have <span style='color: blue; font-size:18px'>Moderate Depression</span>.";
    } elseif ($score >=15 && $score<=19){
        echo "Your score is : ".$score."<br> Your score indicates that you may have <span style='color: purple; font-size:18px'>Moderately Severe Depression</span>.";
    } else{
        echo "Your score is : ".$score."<br> Your score indicates that you may have <span style='color: red; font-size:18px'>Severe Depression</span>";
    }
    ?>

<br>
    <a href="logout.php">Click to logout</a>
</div>
</body>
</html>
