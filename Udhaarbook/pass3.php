<title>Kwik Stop Debit Admin</title>
<?php
session_start();
unset($_SESSION['kwik_id']);
ob_start();
?>
<?php
if((!isset($_SESSION['kwik_id'])))
{
echo "<br/>"."</br>"."<br/>"."</br>"."<br/>"."</br>";
echo "<b><h3><center>Your Password has been changed successfully</center></h3></b>";
echo '<p><center><input type="button" value="Click here to Login Again" onclick="window.location =\'default.php\'" /></p>';
}
else
{
echo "<b><center><h1>Unauthorized Entry</h1></center></b>";
}
?>