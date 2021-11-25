<?php 

$servername = "localhost";
$database = "raise";
$username = "root";
$password = "";
// database Connection
$conn= mysqli_connect($serv, $username, $password, $database);
// $conn = mysqli_connect('hostname', 'username', 'password', 'database');
// check for connection error
if($conn->connect_error){
  die("Error in DB connection: ".$conn->connect_errno." : ".$conn->connect_error);    
}
$title;
$username;
      $filename;
        $mess="";
      $errors = array(); 
if(isset($_POST['submit'])){
     
      $postid=uniqid();

	$filename = $_FILES['uploadfile']['name'];
	$filename=$filename.uniqid()
	// Select file type
	$imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
	
	// valid file extensions
	$extensions_arr = array("jpg","jpeg","png","gif");
    $description = mysqli_real_escape_string($db, $_POST['Description']);
    $title = mysqli_real_escape_string($db, $_POST['title']);
    $username=mysqli_real_escape_string($db, $_POST['uname']);
	// Check extension
	if( in_array($imageFileType,$extensions_arr) ){
 
	// Upload files and store in database
	if(move_uploaded_file($_FILES["uploadfile"]["tmp_name"],'post-image/'.$filename)){
		// Image db insert sql
		$insert = "INSERT INTO post(postid,content,title,imagefileurl,username) VALUES('$postid','$description','$title','$filename',$username)";
		if(mysqli_query($conn, $insert)){
		  echo 'Data inserted successfully';
		}
		else{
		  echo 'Error: '.mysqli_error($conn);
		}
	}else{
		echo 'Error in uploading file ';
	}
	}
} 
?>