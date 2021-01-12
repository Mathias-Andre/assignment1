<?php #Yang JiaLiang Mathias Andre 19031965 ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Yishun Community Hospital</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <?php if(isset($_SESSION['user'])) { ?>
        <li class="nav-item">
          <a class="nav-link active" href="./exerciseEntry.php">Exercise Entry</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="./exerciseEntries.php">Exercise Entries</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="./logout.php">Logout</a>
        </li>
    <?php } else { ?>
      <li class="nav-item">
        <a class="nav-link active" href="./login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="./signup.php">Sign Up</a>
      </li>
    <?php } ?>
    </ul>
  </div>
</nav>

<?php #Yang JiaLiang Mathias Andre 19031965 ?>
