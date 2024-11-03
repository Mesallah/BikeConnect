<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
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

<?php
  include("navbar.php");
?>


<!-- -------------------------------- CRAFT NOW -------------------------------- -->
  <section class="bike container-fluid">
    <img class="image1" src="<?= base_url('assets/pngs/asdasda.png') ?>" alt="image shown">
    <div class="texts text-center mb-3">
      <h1 class="craft" style="font-size: 5vw">Craft your Bike</h1>
      <a href="buildspecs.php"> <u class="craftnow">Craft now</u></a>
    </div>
  </section>

<!-- -------------------------------- STEPS ibahin pa to -------------------------------- -->

  <section class="steps container-fluid p-4">
      <div class="row gx-5 my-5 px-5"> 
        <div class="col-12 col-sm-12 col-md-12 col-lg-4 my-3 text-center">
          <h1 class="headers">Start Customizing</h1>
          <p class="ps">Begin by selecting and customizing various parts of the bike. Explore different options to suit your style and preferences.</p>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-4 my-3 text-center">
          <h1 class="headers">Build your Bike</h1>
          <p class="ps">Continue adding and adjusting components until your bike is fully customized. Mix and match different parts to create your ideal bike.</p>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-4 my-3 text-center">
          <h1 class="headers">Finalize and Save</h1>
          <p class="ps">Review your fully customized bike. Once satisfied, save your design or proceed to purchase.</p>
        </div>
    </div>
  </section>


<!-- -------------------------------- NEW RELEASES -------------------------------- -->
<section class="newr container-fluid">
  <div class="row p-0 m-0">
      <div class="col-12 mt-4 ms-2">
          <h1 class="newreleases display-3">New Releases</h1>
      </div>
    <div class="d-flex justify-content-center">
      <img class="image1" src="<?= base_url('assets/pngs/asdasda.png') ?>" alt="image shown">
    </div>
    <div class="text-center">
        <h1 class="bikename1 fs-2" href="#">Giant  Infinity Trail Offroad V2</h1>
    </div>
  </section>

  <section class="newr container-fluid p-4">
    <div class="row gx-4 mt-1 px-5">
      <div class="col-12 col-sm-6 col-md-6 col-lg-4 mt-3">
        <div class="options p-3">
          <h2 class="optionnames align-self-start">Standert Carbon Vortex</h2>
          <img class="images img-fluid w-75" src="<?= base_url('assets/pngs/standert.png') ?>" alt="image shown">
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-6 col-lg-4 mt-3">
        <div class="options p-3">
          <h2 class="optionnames align-self-start">Tuff Cyclone Pro</h2>
          <img class="images img-fluid w-75" src="<?= base_url('assets/pngs/standert.png') ?>" alt="image shown">
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-6 col-lg-4 mt-3">
        <div class="options p-3">
          <h2 class="optionnames align-self-start">Boulevard Stellar Comfort</h2>
          <img class="images img-fluid w-75" src="<?= base_url('assets/pngs/standert.png') ?>" alt="image shown">
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-6 col-lg-4 mt-3">
        <div class="options p-3">
          <h2 class="optionnames align-self-start">Carbon Titan Grip Brake Lever </h2>
          <img class="images img-fluid w-75" src="<?= base_url('assets/pngs/standert.png') ?>" alt="image shown">
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-6 col-lg-4 mt-3">
        <div class="options p-3">
          <h2 class="optionnames align-self-start">Pembree AeroGrip 32A</h2>
          <img class="images img-fluid w-75" src="<?= base_url('assets/pngs/standert.png') ?>" alt="image shown">
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-6 col-lg-4 mt-3">
        <div class="options p-3">
          <h2 class="optionnames align-self-start">Infinity Quantum Quill Stem</h2>
          <img class="images img-fluid w-75" src="<?= base_url('assets/pngs/standert.png') ?>" alt="image shown">
        </div>
      </div>
      <div class="text-center mt-4">
        <a href="newreleasesspecs.php"> <u class="craftnow">View More</u></a>
      </div> 
    </div>
  </section>


        

<!-- -------------------------------- BRANDS -------------------------------- -->


<section class="brands container-fluid">
  <div class="row p-0 m-0">
      <div class="col-12 mt-4 ms-2">
          <h1 class="topbrands display-3">Top Brands</h1>
      </div>
      <div class="d-flex justify-content-start">
        <img class="image1" src="<?= base_url('assets/pngs/asdasda.png') ?>" alt="image shown">
        <img  class="arrow" src="<?= base_url('assets/svg/arrow.svg') ?>" alt="svg file here">
      </div>
  </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>