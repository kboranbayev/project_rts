<?php
  if (isset($_GET['msg']))
  {
    $msg = $_GET['msg'];
    switch ($msg) {
      case 'loginsuccess':
        $msg = "You sucessfully logged in!";
        successMsg($msg);
        break;
      case 'loginfail':
        $msg = "Oops! Something went wrong.";
        failMsg($msg);
        break;
      case 'logoutsuccess':
        $msg = "You sucessfully logged out!";
        successMsg($msg);
        break;
      case 'registrationsuccess':
        $msg = "You sucessfully registered!";
        successMsg($msg);
        break;
      default:
        failMsg($msg);
        break;
    }
  }
    function successMsg($msg) {
      ?>
      <div class="alert alert-success"><?php echo $msg;?></div>
      <?php
    }
    function failMsg($msg) {
      ?>
      <div class="alert alert-danger"><?php echo $msg;?></div>
      <?php
    }

    if (isset($_SESSION['loggedin']))
    {
      ?>
      <h3>Dashboard</h3>
      <?php
    }
?>
