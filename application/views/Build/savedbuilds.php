<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saved Builds</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

  <?php
    include("navbar.php");
  ?>
<!-- -------------------------------- SAVED BUILDS -------------------------------- -->

  <section class="newr container-fluid">
    <div class="row p-0 m-0">
        <div class="col-12 mt-4 ms-2">
            <h1 class="savedbuilds display-3">Saved Builds</h1>
        </div>
    </div>
    <div class="row p-0 m-0">
      <div class="col-12 mt-2 ms-2">
        <h2 class="savedbuilds">Custom Build 1</h1>
      </div>
    </div>
    <div class="row p-0 m-0">
      <div class="col-2 mt-4">
        <button class="viewspecification" data-bs-toggle="modal" data-bs-target="#specifications"> View Specification</button>
      </div>
      <div class="col-8 d-flex justify-content-center">
        <img class="savedbuildsimage img-fluid" src="pngs/asdasda.png" alt="image shown">
      </div>
      <div class="col-2 d-flex flex-column justify-content-end align-items-end pe-4">
        <p class="totalprice fs-4">Total Price: 1000php</p>
        <p class="totalweight fs-4">Total Weight: 7kg</p>
      </div>
    </div>
  </section>

<!-- -------------------------------- CUSTOM BUILDS -------------------------------- -->

  <section class="newr container-fluid p-4">
    <div class="row gx-4 mt-1 px-5">
      <div class="col-12 col-sm-6 col-md-6 col-lg-4 mt-3">
        <div class="options p-3">
          <h2 class="optionnames align-self-start">Standert Carbon Vortex</h2>
          <img class="images img-fluid w-75" src="pngs/standert.png" alt="image shown">
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-6 col-lg-4 mt-3">
        <div class="options p-3">
          <h2 class="optionnames align-self-start">Tuff Cyclone Pro</h2>
          <img class="images img-fluid w-75" src="pngs/standert.png" alt="image shown">
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-6 col-lg-4 mt-3">
        <div class="options p-3">
          <h2 class="optionnames align-self-start">Boulevard Stellar Comfort</h2>
          <img class="images img-fluid w-75" src="pngs/standert.png" alt="image shown">
        </div>
      </div>
    </div>
  </section>

<!-- -------------------------------- SPECIFICATIONS MODAL -------------------------------- -->

    <div class="modal fade modal1" id="specifications" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="specificationshead">Specifications</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Part</th>
                  <th>Model</th>
                  <th>Weight</th>
                  <th>Price</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Frame</td>
                  <td>Spur V2 Carbon Frame</td>
                  <td>2.14 kg</td>
                  <td>Php 1000</td>
                </tr>
                <tr>
                  <td>Rear Shock</td>
                  <td>Float DPS Factory</td>
                  <td>0.5 kg</td>
                  <td>Php 500</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</html>