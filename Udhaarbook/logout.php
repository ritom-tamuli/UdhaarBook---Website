<title>UdhaarBook - The Digital Khata</title>
<link rel="shortcut icon" href="img/2.png" type="image/png">
<?php
session_start();
unset($_SESSION['kwik_id']);
unset($_SESSION['kwik_pwd']);

if((!isset($_SESSION['kwik_id']))&&(!isset($_SESSION['kwik_pwd'])))
{
echo "<br/>"."</br>"."<br/>"."</br>"."<br/>"."</br>";
echo "<b><center><h1>You are Logged out</h1></b>";
echo '<p><input type="button" style="height:30px" value="Click here to Log-In Again" onclick="window.location =\'default.php\'" /></p>';

}
?>
