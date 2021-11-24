<?php include('include/trial.php'); 
session_start();?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;0,600;1,100;1,300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" href="images/navlogo.png">
        <title>Rafiki.</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <a class="nav-img" href="#navbar"></a>
            <a class="navbar-brand" href="index.php"><img class="nav-logo" src="images/navlogo.png" alt="logo"></a>
        </nav>
        <section class="container-fluid bg">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-6 col-md-3">

                    <!---main-->
                    <form class="form-container" method="POST" action="login.php">
                    <?php include('include/errors.php');?>
                        <div class="form-group">
                        <!--email-->
                        <label for="exampleInputEmail1">Email address</label>
                        <input value="<?php echo $loguser;?>"name="login_username" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <!--password-->
                        <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input name="login_password" type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <!--submit-->
                        <button name="login_submit" type="submit" class="btn btn-primary bt-suc btn-block">Submit</button>
                    </form>  
                    <!---main-->

                </div>
            </div>
        </section>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/script.js"></script>
    </body>
</html>