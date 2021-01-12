<?php #Yang JiaLiang Mathias Andre 19031965 ?>

<?php
session_start();
if (isset($_SESSION['user'])) {
    session_destroy();
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <?php include './extension.php'; ?>
    </head>
    <body>
      <?php include './nav.php'; ?>
        <a href="./login.php">Return to Login</a>
    </body>
</html>

<?php #Yang JiaLiang Mathias Andre 19031965 ?>
