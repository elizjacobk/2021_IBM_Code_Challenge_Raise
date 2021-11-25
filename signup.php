<?php include('include/sign.php'); 
session_start();?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Signup</title>
        <link rel="stylesheet" href="css/signup.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700&display=swap" rel="stylesheet">
    </head>
<body>
    <main>
        <div class="background">
            <div class="text">
                <h1 Style = "text-align:left;">Signup</h1>
                <p>Have Account? <a href="login.php">Login</a></p>
            </div>
            <div class="box">
                <form class="form" method="POST" action="include/sign.php">
                    <input type="text" name = "Fullname" class = "fullname" placeholder="Full Name" required>
                    <input type="email" name = "Email" class="email" placeholder="Email" required>
                    <input type="text" name = "Username" class="username" placeholder="Username" required>
                    <input type="password" name = "Password" class="password" placeholder="Password" required>
                    <input type="submit" name ="Signup" class="button" value="Signup">
                </form>
            </div>
        </div>
    </main>
</body>
</html>