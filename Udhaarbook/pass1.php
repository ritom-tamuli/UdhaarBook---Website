<?php
session_start();
include_once("config.php");
ob_start();
?>

<script type="text/javascript">
function delayedRedirect(){
window.location = "logout.php"
}
</script>
</head>

<body onLoad="setTimeout('delayedRedirect()', 60000)">
</body>


<body>
<br>
<center><h2>Change Your Password</h2></center>
<center>
</br></br>
<table border='20' height='100' width='100' cellspacing='10' cellpadding='10' bordercolor='#21DBD9' bgcolor='#E5F4F4'>
<TR>
<center>
<form action="pass2.php" method="POST">
<TR>
<TD colspan='2'><center><b>Enter New Password</b><br><br>
<input type="password" name="pass" style="width:200px" maxlength="50" required>
</TD>
</TR>

<TR>
<TD><center>
<input type="submit" value="Change" style="height:40px;width:80px">
</TD><TD><center>
<input type="button" value="Cancel" style="width:80px; height:40px" onclick="window.location ='dashboard.php'">
</TD>
</TR>
</form>
</table>

</center>
</body>

<?php
if((!isset($_SESSION['kwik_id']))&&(!isset($_SESSION['kwik_pwd'])))
{
header('Location: default.php') ;
}
?>