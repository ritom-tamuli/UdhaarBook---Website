


<body>
  <?php
  session_start();
  include_once("login.html");
  if((!isset($_SESSION['kwik_id']))&&(!isset($_SESSION['kwik_pwd'])))
  {
  header('Location: default.php') ;
  }
  include_once("config.php");
  ob_start();
  echo "    <nav class='navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar'>
        <div class='container'>
          <a href='index.html' class='navbar-brand'><h5 style='color:white;font-family:'verdana''>UdhaarBook</h5></a>
          <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarCollapse' aria-controls='navbarCollapse' aria-expanded='false' aria-label='Toggle navigation'>
            <i class='lni-menu'></i>
          </button>
          <div class='collapse navbar-collapse' id='navbarCollapse'>
            <ul class='navbar-nav mr-auto w-100 justify-content-end'>
            <li class='nav-item'>
              <a class='nav-link page-scroll' href='dashboard.php'>Home</a>
            </li>
            <li class='nav-item'>
              <a class='nav-link page-scroll' href='pass1.php'>Change Password</a>
            </li>
            <li class='nav-item'>
              <a class='nav-link page-scroll' href='logout.php'>Logout</a>
            </li>
            <li class='nav-item'>
              <a class='nav-link page-scroll' href='add_cust.php'>Add Customer</a>
            </li>
            </ul>
            </div>
            </div>
            </nav>";
  ?>
  <header id="home" class="hero-area">
    <div class="overlay">
      <span></span>
      <span></span>
    </div>

    <div class="container">
      <center>
      <br>
      <table class='table table-striped' style="margin-top: 100px; background-color: rgba(0,0,0, 0.5) !important;">
      <TR>
      <TD style="width:50%">
      <form method='POST' action='dashboard.php'>
      <center><input class="form-control" type='text' style='height:30px;width:170px' name='nsrch' required ><br><br>
      <center><input class='btn btn-success' type='submit' name='mng' value='Search Account'>
      </center>
      </form>
      </TD>
      </TR>
      </table>
      </center>
      <?php
      $x = 1;
      while($x <= 2) {
        echo "<br>";
        $x++;
      }
      //Search Account display Coding
      if(isset($_POST['mng']))
      {
      $nsrch= $conn -> real_escape_string($_POST['nsrch']);
      $sql = mysqli_query($conn,"SELECT * FROM debit_acc WHERE user_id='".$_SESSION['kwik_id']."' AND name LIKE '%$nsrch%'");
      echo "<center>";
      echo "<table class='table table-striped' style='width: 70%; color: white; margin-top: 30px;background-color: rgba(0,0,0, 0.5) !important;'>
      <tr>
      <th><center>Sl.no.</th>
      <th><center>Name</th>
      <th><center>Account</th>
      <th><center>Action</th></tr>";
      //And we display the results
      while($row = mysqli_fetch_assoc($sql))
      {
      echo "<tr>";
      echo "<td width='3%'>"."<center>".$row['id']."</td>";
      echo "<td width='3%'>"."<center>".$row['name']."</td>";
      echo "<td width='3%'>"."<center>".$row['acc_det']."</td>";
      echo "<td width='3%'>"."<center>"."<form action='dashboard.php' method='POST'>
      <input type='text' name='roll_no' value=".$row['id']." hidden>
      <input type='submit' class='btn btn-success' value='Manage' name='mngacc'></form>";
      echo "</td>";
      echo "</tr>";
      }
      echo "</table><hr></center>";
      }
      //End of Search Account display Coding
      ?>

      <?php
      //Account Manage display Coding
      if(isset($_POST['mngacc']))
      {

      $roll_no= $conn -> real_escape_string($_POST['roll_no']);
      $sql = mysqli_query($conn,"SELECT * FROM debit_acc WHERE id='$roll_no'");
      if($row = mysqli_fetch_assoc($sql))
      {
      echo "<center>";
      echo "<table class='table table-striped' style='width: 70%;top-margin:0px; color:white; background-color: rgba(0,0,0, 0.5) !important;'>";
      echo "<tr bgcolor='#E5F4F4'>";
      echo "<td><center>Account History</td></tr>";
      echo "<tr><td width='3%'>"."<center>".$row['pur_hist']."</td></tr>";
      echo "<tr bgcolor='#E5F4F4'><td><center>Account</td></tr>";
      echo "<tr><td width='3%'>"."<center>".$row['acc_det']."</td></tr>";
      echo "<tr><td width='3%'>"."<center>"."<form action='dashboard.php' method='POST'>
      <input type='text' name='roll_no' hidden value=".$row['id'].">
      <input type='text' name='pur_hist' hidden value=".$row['pur_hist'].">
      <input type='text' name='acc_det' hidden value=".$row['acc_det'].">
      <input type='text' name='sale'  style='height:30px;width:70px' class='form-control' required><br><br>
      <input type='submit' class='btn btn-success' value='Update' name='updt'></form>";
      echo "</td></tr>";
      }
      }
      //End of Account Manage display Coding
      ?>
      <?php
      if(isset($_POST['updt']))
      {
      $roll_no= $conn -> real_escape_string($_POST['roll_no']);
      $up_pur_hist= $conn -> real_escape_string($_POST['pur_hist']).$conn -> real_escape_string($_POST['sale']).",";
      $up_acc_det= $conn -> real_escape_string($_POST['acc_det'])+$conn -> real_escape_string($_POST['sale']);
      $sql1="UPDATE debit_acc SET pur_hist='$up_pur_hist',acc_det='$up_acc_det' WHERE id='$roll_no'";

      $result1 = mysqli_query($conn,$sql1);
      if($result1)
      {
      echo '<script type="text/javascript">alert("Account Updated");</script>';
      }
      }

      ?>

      <?php
      ob_end_flush();
      ?>

    </div>
  </header>
