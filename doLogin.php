<?php #Yang JiaLiang Mathias Andre 19031965 ?>

<?php
session_start();
include 'dbFunctions.php';

$username = $_POST['username'];
$password = $_POST['password'];
$password = sha1($password);
$check;

$query = "SELECT id FROM user WHERE username='$username' AND password='$password'";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

if (mysqli_num_rows($result) == 1) {
  $row = mysqli_fetch_assoc($result);
  $id = $row['id'];
  $_SESSION['user'] = $id;
  $check = true;
} else {
  $check = false;
}
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
     <?php include './extension.php'; ?>
   </head>
   <body>
     <div class="container">
       <?php if ($check) { ?>
         <b>Successfully logged in</b>
         <a href="./exerciseEntry.php">Proceed</a>
       <?php } else { ?>
         <b>Login has failed</b>
         <a href="./login.php">Return to Login page</a>
       <?php } ?>
     </div>
   </body>
 </html>

<?php #Yang JiaLiang Mathias Andre 19031965 ?>
