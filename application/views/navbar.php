<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css'); ?>">
</head>
<body>
    <!-- -------------------------------- NAV BAR -------------------------------- -->
  <nav class="navbar navbar-expand-lg custom-navbar sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand ms-4 fs-5" href="#">BikeConnect</a>
      <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto me-4 mb-2 mb-lg-0">
          <li class="nav-item me-4">
            <a class="nav-link fs-6 active" aria-current="page" <a href="<?= site_url('HomeController') ?>"> Home</a> 
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle me-4 fs-6" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Customization
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="prebuilttemplates.php">Pre-built Templates</a></li>
              <li><a class="dropdown-item" href="#">Start from Scratch</a></li>
              <li><a class="dropdown-item" href="savedbuilds.php">Saved Builds</a></li>
            </ul>
          </li>
          <li class="nav-item me-4 fs-6">
            <a class="nav-link" href="partslist.php">Parts</a>
          </li>
          <li class="nav-item me-4 fs-6">
            <a class="nav-link" href="aaccount.php">Account</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <script src="<?= base_url('assets/js/navbarscripts.js') ?>"></script>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>    
</body>

</html>