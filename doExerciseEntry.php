<?php #Yang JiaLiang Mathias Andre 19031965 ?>

<?php
session_start();
include './dbFunctions.php';

$userid = $_SESSION['user'];
$exerciseid = $_POST['exercise'];
$duration = $_POST['time'];

$query = "INSERT INTO user_exercise (user_id, exercise_id, duration)
          VALUES ($userid, $exerciseid, $duration)";
$result =  mysqli_query($link, $query) or die(mysqli_error($link));
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
        <b>Successful Entry</b>
        <a href="./exerciseEntries.php">Proceed to see entry</a>
        <a href="./exerciseEntry.php">Enter another entry</a>
      <?php } else { ?>
        <b>Entry has failed</b>
        <a href="./exerciseEntry.php">Return to entry page</a>
      <?php } ?>
    </div>
  </body>
</html>

<?php #Yang JiaLiang Mathias Andre 19031965 ?>
