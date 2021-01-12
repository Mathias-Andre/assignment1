<?php #Yang JiaLiang Mathias Andre 19031965 ?>

<?php
session_start();
include './dbFunctions.php';

$username = $_POST['username'];
$password = $_POST['password'];
$weight = $_POST['weight'];
$height = $_POST['height'];
$dob = $_POST['dob'];
$active = $_POST['active'];
$password = sha1($password);

$query = "INSERT INTO user(username, password, height, weight, dob, active_level)
          VALUES ('$username', '$password', $weight, $height, '$dob', '$active')";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php include './extension.php'; ?>
  </head>
  <body>
    <?php include './nav.php'; ?>
    <div class="container">
      <?php if ($result == 1) {?>
        <b>Signup Successful</b>
        <a href="./login.php">Proceed to login</a>
      <?php } else { ?>
        <b>Signup has failed</b>
        <a href="./signup.php">Return to signup page</a>
      <?php } ?>
    </div>
  </body>
</html>

<?php #Yang JiaLiang Mathias Andre 19031965 ?>s
