<?php #Yang JiaLiang Mathias Andre 19031965 ?>

<?php
session_start();
include './dbFunctions.php';

$id = $_SESSION['user'];
$query = "SELECT UE.id, duration, exercise_name FROM user_exercise UE INNER JOIN exercise e on UE.exercise_id = e.id WHERE user_id=$id";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php include './extension.php'; ?>
    <style media="screen">
    </style>
  </head>
  <body>
    <?php include './nav.php'; ?>
    <div class="container">
      <div class="card">
        <h2 class="card-header">Exercise Entries</h2>
        <table class="table card-body">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Type</th>
              <th scope="col">Duration</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)) {
              $type = $row['exercise_name'];
              $duration = $row['duration'];
              if ($type == "Walk" && $duration > 30) {?>
             <tr style="background-color: red">
               <th scope="row"><?php echo $row["id"];?></th>
               <td><?php echo $type;?></td>
               <td><?php echo $duration;?></td>
             </tr>
           <?php } else if ($type == "Walk") { ?>
             <tr style="background-color: green">
               <th scope="row"><?php echo $row["id"];?></th>
               <td><?php echo $type;?></td>
               <td><?php echo $duration;?></td>
             </tr>
           <?php } else if ($type == "Run" && $duration > 10) { ?>
             <tr style="background-color: red">
               <th scope="row"><?php echo $row["id"];?></th>
               <td><?php echo $type;?></td>
               <td><?php echo $duration;?></td>
             </tr>
           <?php } else if ($type == "Run") { ?>
             <tr style="background-color: green">
               <th scope="row"><?php echo $row["id"];?></th>
               <td><?php echo $type;?></td>
               <td><?php echo $duration;?></td>
             </tr>
           <?php } else if ($type == "Cycle" && $duration > 20) { ?>
             <tr style="background-color: red">
               <th scope="row"><?php echo $row["id"];?></th>
               <td><?php echo $type;?></td>
               <td><?php echo $duration;?></td>
             </tr>
           <?php } else if ($type == "Cycle") { ?>
             <tr style="background-color: green">
               <th scope="row"><?php echo $row["id"];?></th>
               <td><?php echo $type;?></td>
               <td><?php echo $duration;?></td>
             </tr>
           <?php } } ?>
          </tbody>
        </table>
      </div>
    </div>
  </body>
</html>

<?php #Yang JiaLiang Mathias Andre 19031965 ?>
