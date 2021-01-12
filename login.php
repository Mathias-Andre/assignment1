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
            required: true
          }, password: {
            required: true
          }
        },
        messages: {
          username: {
            required: "Please enter your username"
          }, password: {
            required: "Please enter your password"
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
        <h2 class="card-header">Login</h2>
        <form action="doLogin.php" method="post" class="card-body">
          <div class="form-group">
            <label for="id_username">Username: </label>
            <input type="text" id="id_username" class="form-control" name="username" onfocus="this.value=''">
          </div>
          <div class="form-group">
            <label for="id_password">Password: </label>
            <input type="password" id="id_password" class="form-control" name="password" onfocus="this.value=''">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </body>
</html>

<?php #Yang JiaLiang Mathias Andre 19031965 ?>
