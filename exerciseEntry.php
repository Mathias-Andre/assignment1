<?php #Yang JiaLiang Mathias Andre 19031965 ?>

<?php
session_start();
include './dbFunctions.php';

$query = "SELECT * FROM exercise";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$check;

if (mysqli_num_rows($result) != 0) {
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
    <style media="screen">
      form {
        margin-top: 30px;
      }
      #id_time {
        -webkit-appearance: none;
        appearance: none;
        width: 100%;
        height: 25px;
        background: lightgray;
        outline: none;
      }
      form .error {
        color: #ff0000;
      }
    </style>
    <script type="text/javascript">
      function update(event) {
        $("#display").html(event);
      }
      $(document).ready(function() {
        $("form").validate({
          rules: {
            exercise: {
              min: 1
            }
          },
          messages: {
            exercise: {
              min: "Please choose an exercise"
            }
          },
          submitHandler: function() {
            return true;
          }
        });
      });

    </script>
  </head>
  <body>
    <?php include './nav.php'; ?>
    <div class="container">
      <div class='card'>
        <h2 class='card-header'>Exercise Entry</h2>
        <?php if ($check) { ?>
          <form class="card-body" action="doExerciseEntry.php" method="post">
            <div class="form-group">
              <label for="id_exercise">Choose an Exercise</label>
              <select class="form-control" name="exercise" id="id_exercise">
                <option value="0">--- Please Select an Exercise</option>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                  <option value="<?php echo $row["id"] ?>"><?php echo $row["exercise_name"] ?></option>
                <?php } ?>
              </select>
            </div>
            <div class="form-group">
              <label for="id_time">Please select the time:</label>
              <input type="range" name="time" value="5"  min="5" max="120" id="id_time" class="form-control" oninput=update(this.value)>
              <div class="form-control">
                Time: <label id="display">5</label> mins
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        <?php } else { ?>
          <p class="card-body">There is no exercise available</p>
        <?php } ?>
      </div>
    </div>
  </body>
</html>

<?php #Yang JiaLiang Mathias Andre 19031965 ?>
