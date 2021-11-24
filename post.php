<?php
    //   session_start();

      $servername = "localhost";
$database = "raise";
$username = "root";
$password = "";
    //   $db = mysqli_connect('localhost', 'designproject', '', 'Rafiki');
    // $db = mysqli_connect('localhost', 'root', '', '','');
      $db = mysqli_connect($serv, $username, $password, $database);

      //variables
      $description;
      $title;
      $imagefileurl;
        $mess="";
      $errors = array(); 
      $postid;
    $tempname;
      if (isset($_POST['upload'])){
            $postid=uniqid()
          $imagefileurl=$_FILES["uploadimage"]["name"];
          $imagefileurl=$filename.uniqid();
          $folder="post-image/".$imagefileurl;
          $tempname=$_FILES["uploadimage"]["temp_name"]

            //accepting
              $description = mysqli_real_escape_string($db, $_POST['Description']);
              $title = mysqli_real_escape_string($db, $_POST['Title']);
              $imagefileurl=  mysqli_real_escape_string($db, $_POST['imagefileurl']);
            //   $email=   mysqli_real_escape_string($db, $_POST['Email']);  

            //error checking
            // if(empty($username)){array_push($errors, "User name is required");}
            // if (empty($password)) { array_push($errors, "Password is required"); }
            // if (empty($email)) { array_push($errors, "Email is required"); }
            // if (empty($fullname)) { array_push($errors, "Full name required"); }

            //connection
            if (count($errors) == 0) {
                    $sql="INSERT INTO post(postid,description,title,imagefileurl) VALUES('$postid','$description','$title','$imagefileurl')";
                //   $query="SELECT * FROM customer where email='$loguser' AND Password='$logpass';";
                //   $results = mysqli_query($db, $sql);
                  if(mysqli_query($db,$sql)){
                     if(move_uploaded_file($tempname,$folder)){
                        $msg="Image uploaded successfully"
                     }
                     else{
                         $msg="Not uploaded successfully"
                     }
                  }
                  else{
                      mysqli_error($conn);
                  }
                // 
                }
      }
      ?>
