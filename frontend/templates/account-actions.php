<?php
  if (isset($_SESSION['loggedin']))
  {
?>
    <div class="account-actions">
      <a class="nav-item nav-link active" href="index.php?page=logout">Logout</a>
      <a class="nav-item nav-link active" href="index.php?page=account">Account</a>
    </div>
<?php
  }
  else
  {
?>
    <div class="account-actions">
      <a class="nav-item nav-link active" href="index.php?page=login">Login</a>
      <a class="nav-item nav-link active" href="index.php?page=register">Registration</a>
    </div>
<?php
  }
?>
