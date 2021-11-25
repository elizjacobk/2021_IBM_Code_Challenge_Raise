<?php
$loguser;
$logpass;
$errors = array();
session_start();
      $db = mysqli_connect('localhost', 'root', '9470', 'Raise');
if (isset($_POST['login_submit'])){
  //accepting
    $loguser = mysqli_real_escape_string($db, 
    $_POST['login_username']);
    $logpass = mysqli_real_escape_string($db, 
    $_POST['login_password']);

  //error checking
  if(empty($loguser)){array_push($errors, 
  "Username is required");}
  if (empty($logpass)) { array_push($errors, 
  "Password is required"); }

  //connection
  if (count($errors) == 0) {
        $query="SELECT * FROM User where Username='$loguser' 
        AND Password='$logpass';";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
              $_SESSION['username'] = $loguser;
              $_SESSION['success'] = "You are now logged in";
              header('location: ../index.php');
            }
        else{
            $_SESSION['username'] = "Incorrect Entries, go back to login page."; header('location: ../error.php');}
      }
    }