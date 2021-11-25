<?php 
session_start();
$logname;
$logmail;
$loguser;
$logpass;
$db = new mysqli('localhost', 'root', '9470', 'Raise');
if (isset($_POST['Signup'])){
  //accepting
  $logname = mysqli_real_escape_string($db, $_POST['Fullname']);
  $logmail = mysqli_real_escape_string($db, $_POST['Email']);
  $loguser = mysqli_real_escape_string($db, $_POST['Username']);
  $logpass = mysqli_real_escape_string($db, $_POST['Password']);
  $query="INSERT INTO User (Name, Username, Email, Password) VALUES('$logname', '$loguser', '$logmail', '$logpass');";
  mysqli_query($db, $query);
  if ($db->query($query) === TRUE) {
      $_SESSION['username'] = $loguser;
              $_SESSION['success'] = "You are now logged in";
              header('location: ../index.php');
    } else {
      $_SESSION['username'] = "Incorrect Entries, go back to login page."; header('location: ../error.php');
    }
  /**/
}