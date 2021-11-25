<?php 
session_start();
$title;
$text;
$filename = $_FILES["img"]["name"];
$db = new mysqli('localhost', 'root', '9470', 'Raise');
if (isset($_POST['Submit'])){
    $tempname = $_FILES["img"]["temp_name"];    
    $folder = "../images/".$filename;
  //accepting
  $title = mysqli_real_escape_string($db, $_POST['Title']);
  $text = mysqli_real_escape_string($db, $_POST['content']);
  $query="INSERT INTO Post (Title, Published_at, Image, Content) VALUES('$title', now(), '$filename', '$text');";
  mysqli_query($db, $query);
  if ($db->query($query) === TRUE) {
      $_SESSION['username'] = $loguser;
              $_SESSION['success'] = "You are now logged in";
              header('location: ../yes.php');
    } else {
      $_SESSION['username'] = "Incorrect Entries, go back to login page."; header('location: ../error.php');
    }
  /**/
}