<?php

$showAlert = false;
$showError = false;
$exists=false;
include_once("login.html");

if($_SERVER["REQUEST_METHOD"] == "POST") {

    // Include file which makes the
    // Database Connection.
    include 'config.php';

    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];


    $sql = "Select * from user where user_id='$username'";

    $result = mysqli_query($conn, $sql);

    $num = mysqli_num_rows($result);

    // This sql query is use to check if
    // the username is already present
    // or not in our Database
    if($num == 0) {
        if(($password == $cpassword) && $exists==false) {



            // Password Hashing is used here.
            $sql = "INSERT INTO `user` ( `user_id`,
                `pwd`) VALUES ('$username',
                '$password')";

            $result = mysqli_query($conn, $sql);

            if ($result) {
                $showAlert = true;
            }
        }
        else {
            $showError = "Passwords do not match";
        }
    }// end if

   if($num>0)
   {
      $exists="Username not available";
   }

}//end if

?>

<!doctype html>

<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content=
        "width=device-width, initial-scale=1,
        shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity=
"sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
        crossorigin="anonymous">
</head>

<body>

<?php

    if($showAlert) {

        echo ' <div class="alert alert-success
            alert-dismissible fade show" role="alert">

            <strong>Success!</strong> Your account is
            now created and you can login.
            <button type="button" class="close"
                data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div> ';
    }

    if($showError) {

        echo ' <div class="alert alert-danger
            alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'

       <button type="button" class="close"
            data-dismiss="alert aria-label="Close">
            <span aria-hidden="true">×</span>
       </button>
     </div> ';
   }

    if($exists) {
        echo ' <div class="alert alert-danger
            alert-dismissible fade show" role="alert">

        <strong>Error!</strong> '. $exists.'
        <button type="button" class="close"
            data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
       </div> ';
     }

?>
<header id="home" class="hero-area">
  <div class="overlay">
    <span></span>
    <span></span>
  </div>
  <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
    <div class="container">
      <a href="index.html" class="navbar-brand"><h1 style="color:white;font-family:'verdana';margin-top:15px;">UdhaarBook</h1></a>
    </div>
  </nav>
  <div class="container">
    <div id="login-row" class="row justify-content-center align-items-center">
    <div id="login-column" class="col-md-6">
        <div id="login-box" class="col-md-12">
          <form action="signup.php" method="post">
              <h3 class="text-center text-white">Sign up</h3>
              <div class="form-group">
                  <label for="username" class="text-white">Username</label>
              <input type="text" class="form-control" id="username"
                  name="username" aria-describedby="emailHelp" required>
              </div>

              <div class="form-group">
                  <label for="password" class="text-white">Password</label>
                  <input type="password" class="form-control"
                  id="password" name="password" required>
              </div>

              <div class="form-group">
                  <label for="cpassword" class="text-white">Confirm Password</label>
                  <input type="password" class="form-control"
                      id="cpassword" name="cpassword" required>

                  <small id="emailHelp" class="form-text text-white">
                  Make sure to type the same password
                  </small>
              </div>
              <button type="submit" class="btn btn-primary">
                SignUp
              </button>
              <div id="register-link" class="text-right">
                  <a href="default.php" class="text-white">Log in</a>
              </div>
          </form>
        </div>
  </div>
  </div>
</div>
</header>
</body>
</html>
