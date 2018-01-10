<div class="layer">
  <div class="header">
    <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="index.php?page=index">
        <div class="logo">
          <img src="frontend/images/<?php echo $logo; ?>" />
          <div class="title">
            <h1><?php echo $title . $seperator . $description; ?></h1>
          </div>
        </div>
      </a>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="index.php?page=index">Index</a>
          <a class="nav-item nav-link active" href="index.php?page=contact">Contact</a>
          <?php
            require_once("frontend/templates/account-actions.php");
          ?>
        </div>
      </div>
    </nav>
  </div>
</div>
