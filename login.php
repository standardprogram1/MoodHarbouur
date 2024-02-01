<?php
if($_SERVER["REQUEST_METHOD"] =="POST")
{
    include("connection1.php");
    $username=$_POST["username"];
    $password=$_POST["password"];
    $query="SELECT * FROM userinfo WHERE username='$username' AND password='$password'";
    $result=mysqli_query($conn,$query);
    $num_of_user_check=mysqli_num_rows($result);
    if($num_of_user_check==1)
    {
        echo '<script>alert("Login successfull"); </script>';
        session_start();
        $_SESSION["username"]=$username;
        $_SESSION["loggedin"]=true;
        $_SESSION["score"]=0;
        header("location:questions.php");
    }
    else
    {
        echo '<script>alert("Invalid credentials")</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    
<style>
    body {
        background-color: #4bd4d6; 
        font-family: Arial, sans-serif; 
        text-align: center; 
    }

    h2 {
        color: #3498db; 
    }

    form {
        margin: 0 auto; 
        width: 300px; 
        padding: 20px; 
        background-color: #ffffff; 
        border-radius: 10px; 
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3); 
    }

    label {
        display: block; 
        text-align: left; 
        margin-bottom: 10px; 
        font-weight: bold; 
    }

    input {
        width: 100%; 
        padding: 8px; 
        margin-bottom: 10px; 
        border: 1px solid #ccc; 
        border-radius: 5px; 
    }

    button {
        background-color: #3498db; 
        color: #fff; 
        padding: 10px 20px; 
        border: none; 
        border-radius: 5px; 
        cursor: pointer; 
    }

    button:hover {
        background-color: #2980b9; 
    }
    #button1 {
            background-color: #2ecc71; 
        }

        #button1:hover {
            background-color: #27ae60; 
        }
</style>
</head>
<body>
    <h2>User Login</h2>
    <form action="login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>
        <button type="submit" placeholder="login">Login</button>
    </form>
    <button type="button" id="button1" onclick="redirectToRegister()">Register?</button>

    <script>
        function redirectToRegister() 
        {
            window.location.href = "register.php";
        }
    </script>
</body>


</html>
