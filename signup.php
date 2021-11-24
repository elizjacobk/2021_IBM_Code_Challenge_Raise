<?php
      session_start();

      $servername = "localhost";
$database = "raise";
$username = "root";
$password = "";
    //   $db = mysqli_connect('localhost', 'designproject', '', 'Rafiki');
    // $db = mysqli_connect('localhost', 'root', '', '','');
      $db = mysqli_connect($serv, $username, $password, $database);

      //variables
      $username;
      $password;
      $email;
      $fullname;
      $errors = array(); 
      $userid=uniqid()

      if (isset($_POST['Signup'])){
            //accepting
              $username = mysqli_real_escape_string($db, $_POST['Username']);
              $password = mysqli_real_escape_string($db, $_POST['Password']);
              $fullname=  mysqli_real_escape_string($db, $_POST['Fullname']);
              $email=   mysqli_real_escape_string($db, $_POST['Email']);  

            //error checking
            if(empty($username)){array_push($errors, "User name is required");}
            if (empty($password)) { array_push($errors, "Password is required"); }
            if (empty($email)) { array_push($errors, "Email is required"); }
            if (empty($fullname)) { array_push($errors, "Full name required"); }

            //connection
            if (count($errors) == 0) {
                    $sql="INSERT INTO user(userid,fullname,email,username,password) VALUES($userid,$fullname,$email,$username,$password)";
                //   $query="SELECT * FROM customer where email='$loguser' AND Password='$logpass';";
                //   $results = mysqli_query($db, $sql);
                  if(mysqli_query($db,$sql)){
                      echo "New record created "
                      $_SESSION['username'] = $username;
                      $_SESSION['success'] = "You are now logged in";
                      header('location: index.html');
                  }
                  else{
                      mysqli_error($conn);
                  }
                // 
                }
      }
      ?>