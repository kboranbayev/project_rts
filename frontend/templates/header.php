<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php?page=index">
    <?php echo $title ?>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php?page=index">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=contact">Contact</a>
      </li>
    </ul>
    <?php
      if (isset($_SESSION['loggedin']))
      {
    ?>
          <a class="btn btn-outline-info my-2 my-sm-0" href="index.php?page=account">Account</a>
          <a class="btn btn-outline-danger my-2 my-sm-0" href="index.php?page=logout">Sign Out</a>
  <?php
    }
    else
    {
      require_once("frontend/templates/login-header.php");
    }
    ?>
  </div>
</nav>
