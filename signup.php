<?php #Yang JiaLiang Mathias Andre 19031965 ?>

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
      form .error {
        color: #ff0000;
      }
    </style>
    <script type="text/javascript">
      $(document).ready(function() {
          $("form").validate({
            rules: {
              username: {
                required: true,
                minlength: 4
              }, password: {
                required: true,
                minlength: 4
              }, weight: {
                required: true,
                min: 0,
                max: 300
              }, height: {
                required: true,
                min: 0.1,
                max: 3
              }, dob: {
                required: true
              }
            },
            messages: {
              username: {
                required: "Please enter your username",
                minlength: "Please enter more than 4 characters"
              }, password: {
                required: "Please enter your password",
                minlength: "Please enter more than 4 characters"
              }, weight: {
                required: "Please enter your weight",
                min: "Please enter a number more than 0",
                max: "Please enter a number less than 300"
              }, height: {
                required: "Please enter your height",
                min: "Please enter a number more than 0.1",
                max: "Please enter a number less than 3"
              }, dob: {
                required: "Please enter your date of birth"
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
      <div class="card">
        <h2 class="card-header">Sign Up</h2>
        <form action="doSignup.php" method="post" class="card-body">
          <div class="form-group">
            <label for="id_username">Username: </label>
            <input type="text" id="id_username" class="form-control" name="username">
          </div>
          <div class="form-group">
            <label for="id_password">Password: </label>
            <input type="password" id="id_password" class="form-control" name="password">
          </div>
          <div class="form-group">
            <label for="id_weight">Weight(Kg): </label>
            <input type="number" id="id_weight" class="form-control" name="weight" step=".01">
          </div>
          <div class="form-group">
            <label for="id_height">Height(M): </label>
            <input type="number" id="id_height" class="form-control" name="height" step=".01">
          </div>
          <div class="form-group">
            <label for="id_dob">Date of Birth: </label>
            <input type="date" id="id_dob" class="form-control" name="dob">
          </div>
          <div class="form-group">
            <label for="id_activeLvl">Active Level: </label>
            <select class="form-control" name="active" id="id_activeLvl">
              <option value="Sedentary">Sedentary</option>
              <option value="Moderate">Moderate</option>
              <option value="Active">Active</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </body>
</html>

<?php #Yang JiaLiang Mathias Andre 19031965 ?>
