<?php
include("connection1.php");
session_start();
if($_SESSION["loggedin"]!=true)
{
    header("location:login.php");
    exit;
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['q1']))
    {
        $_SESSION["score"]+=$_POST['q1'];
    }
    if(isset($_POST['q2']))
    {
        $_SESSION["score"]+=$_POST['q2'];
    }
    if(isset($_POST['q3']))
    {
        $_SESSION["score"]+=$_POST['q3'];
    }
    if(isset($_POST['q4']))
    {
        $_SESSION["score"]+=$_POST['q4'];
    }
    if(isset($_POST['q5']))
    {
        $_SESSION["score"]+=$_POST['q5'];
    }
    if(isset($_POST['q6']))
    {
        $_SESSION["score"]+=$_POST['q6'];
    }
    if(isset($_POST['q7']))
    {
        $_SESSION["score"]+=$_POST['q7'];
    }
    if(isset($_POST['q8']))
    {
        $_SESSION["score"]+=$_POST['q8'];
    }
    if(isset($_POST['q9']))
    {
        $_SESSION["score"]+=$_POST['q9'];
    }
    $username=$_SESSION['username'];
    $score=$_SESSION["score"];
    $query="INSERT INTO score(username,date_time,score) VALUE('$username',current_timestamp(),'$score')";
    $result=mysqli_query($conn,$query);
    if(!$result)
    {
        echo mysqli_error($conn);
    }
    header("location:result.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MCQ Quiz</title>
    <!--style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
        }


        .question {
            margin-bottom: 10px;
        }


        .options {
            margin-bottom: 20px;
        }


        .option {
            margin-bottom: 10px;
        }
    </style-->
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-image: url('https://cdn.pixabay.com/photo/2022/05/12/16/04/trees-7191822_640.png');
        background-size: cover;
        background-repeat: no-repeat;
    }

    h1 {
        text-align: center;
        color: #333;
    }

    .question {
        margin: 20px auto;
        max-width: 500px;
        padding: 20px;
        background-color: rgba(255, 255, 255, 0.9);
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .options {
        margin: 10px 0;
    }

    .option {
        margin: 5px 0;
    }

    label {
        cursor: pointer;
    }

    input[type="radio"] {
        margin-right: 5px;
    }

    input[type="submit"] {
        display: block;
        margin: 20px auto;
        padding: 10px 20px;
        background-color: #007BFF;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>


</head>
<body>
    <h1>PHQ-9 Questionnaire</h1>



    <form action="questions.php" method="post">
        <div class="question">
            <strong>1. Over the past two weeks, how often have you experienced little interest or pleasure in doing things?</strong>
            <div class="options">
                <div class="option">
                    <input type="radio" name="q1" value=0 required>
                    <label>A. Not at all</label>
                </div>
                <div class="option">
                    <input type="radio" name="q1" value=1>
                    <label>B. Several days</label>
                </div>
                <div class="option">
                    <input type="radio" name="q1" value=2>
                    <label>C. More than half the days</label>
                </div>
                <div class="option">
                    <input type="radio" name="q1" value=3>
                    <label>D. Nearly every day</label>
                </div>
            </div>
        </div>


        <div class="question">
            <strong>2. How often did you feel down,depressed or hopeless over the past two weeks?</strong>
            <div class="options">
                <div class="option">
                    <input type="radio" name="q2" value=0 required>
                    <label>A. Not at all</label>
                </div>
                <div class="option">
                    <input type="radio" name="q2" value=1>
                    <label>B. Several days</label>
                </div>
                <div class="option">
                    <input type="radio" name="q2" value=2>
                    <label>C. More than half the days</label>
                </div>
                <div class="option">
                    <input type="radio" name="q2" value=3>
                    <label>D. Nearly every day</label>
                </div>
            </div>
        </div>


        <div class="question">
            <strong>3. How often did you experience trouble falling or staying asleep, or sleeping too much over the past two weeks?</strong>
            <div class="options">
                <div class="option">
                    <input type="radio" name="q3" value=0 required>
                    <label>A. Not at all</label>
                </div>
                <div class="option">
                    <input type="radio" name="q3" value=1>
                    <label>B. Several days</label>
                </div>
                <div class="option">
                    <input type="radio" name="q3" value=2>
                    <label>C. More than half the days</label>
                </div>
                <div class="option">
                    <input type="radio" name="q3" value=3>
                    <label>D. Nearly every day</label>
                </div>
            </div>
        </div>

        <div class="question">
            <strong>4. Have often did you feel tired or had little energy over the past two weeks?</strong>
            <div class="options">
                <div class="option">
                    <input type="radio" name="q4" value=0 required>
                    <label>A. Not at all</label>
                </div>
                <div class="option">
                    <input type="radio" name="q4" value=1>
                    <label>B. Several days</label>
                </div>
                <div class="option">
                    <input type="radio" name="q4" value=2>
                    <label>C. More than half the days</label>
                </div>
                <div class="option">
                    <input type="radio" name="q4" value=3>
                    <label>D. Nearly every day</label>
                </div>
            </div>
        </div>

        <div class="question">
            <strong>5. Poor appetite or overeating (consider over the past two weeks)?</strong>
            <div class="options">
                <div class="option">
                    <input type="radio" name="q5" value=0 required>
                    <label>A. Not at all</label>
                </div>
                <div class="option">
                    <input type="radio" name="q5" value=1>
                    <label>B. Several days</label>
                </div>
                <div class="option">
                    <input type="radio" name="q5" value=2>
                    <label>C. More than half the days</label>
                </div>
                <div class="option">
                    <input type="radio" name="q5" value=3>
                    <label>D. Nearly every day</label>
                </div>
            </div>
        </div>

        <div class="question">
            <strong>6. Feeling bad about yourself or that you are a failure or have let yourself or your family down over the past two weeks?</strong>
            <div class="options">
                <div class="option">
                    <input type="radio" name="q6" value=0 required>
                    <label>A. Not at all</label>
                </div>
                <div class="option">
                    <input type="radio" name="q6" value=1>
                    <label>B. Several days</label>
                </div>
                <div class="option">
                    <input type="radio" name="q6" value=2>
                    <label>C. More than half the days</label>
                </div>
                <div class="option">
                    <input type="radio" name="q6" value=3>
                    <label>D. Nearly every day</label>
                </div>
            </div>
        </div>

        <div class="question">
            <strong>7. Trouble concentrating on things, such as reading the newspaper or watching television over the last two weeks?</strong>
            <div class="options">
                <div class="option">
                    <input type="radio" name="q7" value=0 required>
                    <label>A. Not at all</label>
                </div>
                <div class="option">
                    <input type="radio" name="q7" value=1>
                    <label>B. Several days</label>
                </div>
                <div class="option">
                    <input type="radio" name="q7" value=2>
                    <label>C. More than half the days</label>
                </div>
                <div class="option">
                    <input type="radio" name="q7" value=3>
                    <label>D. Nearly every day</label>
                </div>
            </div>
        </div>

        <div class="question">
            <strong>8. Moving or speaking so slowly that other people could have noticed. Or the opposite being so figety or restless that you have been moving around a lot more than usual over the past two weeks?</strong>
            <div class="options">
                <div class="option">
                    <input type="radio" name="q8" value=0 required>
                    <label>A. Not at all</label>
                </div>
                <div class="option">
                    <input type="radio" name="q8" value=1>
                    <label>B. Several days</label>
                </div>
                <div class="option">
                    <input type="radio" name="q8" value=2>
                    <label>C. More than half the days</label>
                </div>
                <div class="option">
                    <input type="radio" name="q8" value=3>
                    <label>D. Nearly every day</label>
                </div>
            </div>
        </div>

        <div class="question">
            <strong>9. Thoughts that you would be better off dead, or of hurting yourself over the past two weeks?</strong>
            <div class="options">
                <div class="option">
                    <input type="radio" name="q9" value=0 required>
                    <label>A. Not at all</label>
                </div>
                <div class="option">
                    <input type="radio" name="q9" value=1>
                    <label>B. Several days</label>
                </div>
                <div class="option">
                    <input type="radio" name="q9" value=2>
                    <label>C. More than half the days</label>
                </div>
                <div class="option">
                    <input type="radio" name="q9" value=3>
                    <label>D. Nearly every day</label>
                </div>
            </div>
        </div>

        

        <input type="submit">
    </form>
</body>


</html>