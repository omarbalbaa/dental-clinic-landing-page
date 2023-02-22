<?php
session_start();
include("connection.php");
include("functions.php");
$msg1 = "";

$user_data = check_login($con);
if ($user_data != null)
{
  $msg1 = ("Hello, " . $user_data['name']);
}
?>

<!DOCTYPE html>
<html>
    <body>
<nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="./index.php">El Nagy</a>
        <div class="collapse navbar-collapse" style="justify-content: space-between;" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="./index.php"
                >Services</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./checkpoint.php">Request Appointment</a>
            </li>
          </ul>
          <strong style="color:#5A3761;"><?php echo $msg1 ?></strong>
        </div>
      </div>
    </nav>
</body>
</html>