<?php
session_start();
ob_start();
include_once("config.php");
include_once("login.html");
unset($_SESSION['kwik_id']);
unset($_SESSION['kwik_pwd']);
?>

<body>
  <header id="home" class="hero-area">
    <div class="overlay">
      <span></span>
      <span></span>
    </div>
    <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
      <div class="container">
        <a href="index.html" class="navbar-brand"><h5 style="color:white;font-family:'verdana'">UdhaarBook</h5></a>
      </div>
    </nav>
    <div class="container">
      <div id="login-row" class="row justify-content-center align-items-center">
      <div id="login-column" class="col-md-6">
          <div id="login-box" class="col-md-12">
              <form id="login-form" class="form" action="default.php" method="POST" autocomplete="off">
                  <h3 class="text-center text-white">Login</h3>
                  <div class="form-group">
                      <label for="username" class="text-white">Username:</label><br>
                      <input type="text" name="user_id" id="username" class="form-control" required>
                  </div>
                  <div class="form-group">
                      <label for="password" class="text-white">Password:</label><br>
                      <input type="password" name="pwd" id="password" class="form-control" required>
                  </div>
                  <div class="form-group">
                      <br>
                      <input type="submit" name="submit" class="btn btn-primary btn-md" value="Log-In">
                  </div>
                  <div id="register-link" class="text-right">
                      <a href="signup.php" class="text-white">Sign Up</a>
                  </div>
              </form>
          </div>
    </div>
    </div>
  </div>
  </header>
<!--<body>

<center>
<h2>Digital Ledger Website<h2>
<h3>Debit Account</h3>
<table border="20" height="100" cellpadding="10" bordercolor='#21DBD9' bgcolor='#E5F4F4'>
<form action="default.php" method="POST" autocomplete="off">
<TR>
<TD><b>User-Id</b></TD>
<TD>
<input type="text" name="user_id" style="width:180px;height:20px" required>
</TD>
</TR>
<TR>
<TD><b>Password</b></TD>
<TD>
<input type="password" name="pwd" style="width:180px;height:20px" required>
</TD>
</TR>
<TR>
<TD><b></b></TD>
<TD>
&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" value="Log-In" name="submit" style="height:30px;width:80px">
</form>
</table><font color="blue" size="2">
-->

<?php
if(isset($_POST['submit']))
{
$user_id = $conn -> real_escape_string($_POST['user_id']);
$pwd = $conn -> real_escape_string($_POST['pwd']); //mysql_real_escape_string
$result = mysqli_query($conn,"SELECT * FROM user WHERE user_id='$user_id' and pwd='$pwd'");

if($row = mysqli_fetch_array($result))
{
$_SESSION['kwik_id']=$user_id;//stores email session
$_SESSION['kwik_pwd']=$pwd;//stores password session
header('location:dashboard.php');
}
else
{
echo '<script type="text/javascript">alert("Invalid User-Id or Password!");</script>';
}
}
ob_end_flush();
?>
