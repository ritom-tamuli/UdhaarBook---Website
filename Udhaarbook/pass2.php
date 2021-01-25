<?php
session_start();
include_once("config.php");
ob_start();
?>

<?php
if(isset($_SESSION['kwik_id']))
{
$id=$_SESSION['kwik_id'];
$pass=$conn -> real_escape_string($_POST['pass']);
$sql=mysqli_query($conn,"UPDATE user SET pwd='$pass' WHERE user_id='$id'");
if($sql)
{
header('Location: pass3.php') ;
}
else
{
echo "Error Occured, Try Again";
}
}
if((!isset($_SESSION['kwik_id'])))
{
header('Location: default.php');
}
?>
