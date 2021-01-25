<?php include_once("login.html"); ?>
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
          <form action="add.php" method="post">
              <h3 class="text-center text-white">Add New Customer</h3>
              <div class="form-group">
                  <label for="text" class="text-white">User id</label>
                  <input type="text" class="form-control"
                   name="usr" required>
              </div>
              <div class="form-group">
                  <label for="username" class="text-white">Name of the Customer</label>
              <input type="text" class="form-control"
                  name="name" aria-describedby="emailHelp" required>
              </div>
              <div class="form-group">
                  <label for="ph" class="text-white">Purchase History</label>
              <input type="text" class="form-control"
                  name="ph" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                  <label for="amt" class="text-white">Amount Pending</label>
                  <input type="text" class="form-control"
                   name="amt" required>
              </div>
              <button type="submit" class="btn btn-primary">
                Add customers
              </button>
              <div id="register-link" class="text-right">
                  <a href="dashboard.php" class="text-white">Home</a>
              </div>
              </div>

          </form>
        </div>
  </div>
  </div>
</div>
</header>
</body>
</html>
