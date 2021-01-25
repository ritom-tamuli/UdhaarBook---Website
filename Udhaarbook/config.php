<title>UdhaarBook - The Digital Khata</title>
<?php
$conn=new mysqli('localhost','ritom','tamuli123','kwik_debit');//mysql_connect("localhost","ritom","tamuli123");
//$db=mysql_select_db("kwik_debit",$conn);   $conn = new mysqli('localhost','ritom','tamuli123','ongc');
?>

<SCRIPT LANGUAGE="JavaScript">
var message="Sorry,Right click disabled!";
///////////////////////////////////
function clickIE() {if (document.all) {alert(message);return false;}}
function clickNS(e) {if
(document.layers||(document.getElementById&&!document.all)) {
if (e.which==2||e.which==3) {alert(message);return false;}}}
if (document.layers)
{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}
else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;}

document.oncontextmenu=new Function("return false")
// -->
</script>
