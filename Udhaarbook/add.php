
<?php
include_once("config.php");
$usr = mysqli_real_escape_string($conn, $_REQUEST['usr']);
$name = mysqli_real_escape_string($conn, $_REQUEST['name']);
$ph = mysqli_real_escape_string($conn, $_REQUEST['ph']);
$amt = mysqli_real_escape_string($conn, $_REQUEST['amt']);

// Attempt insert query execution
$sql = "INSERT INTO debit_acc (user_id, name, pur_hist, acc_det) VALUES ('$usr', '$name', '$ph','$amt')";
if(mysqli_query($conn, $sql)){
    header('Location: dashboard.php') ;
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
