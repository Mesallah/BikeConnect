<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Build Your Bike</title>
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


    
  <section class="buildbg container-fluid">
    <div class="row pt-5 pb-3 m-0 justify-content-center">
        <div class="col-auto">
            <a class="buildheadops fs-5"> Go back </a>
        </div>
        <div class="col-auto ms-5">
            <a class="buildheadops fs-5"> All Items </a>
        </div>
        <div class="col-auto ms-5">
            <a class="buildheadops fs-5"> Restart </a>
        </div>
    </div>
  </section>

<!-- -------------------------------- MAIN CONTENT -------------------------------- -->

  <section class="buildbg container-fluid">
    <div class="row ms-2 p-0 m-0">
      <div class="col-lg-3">
          <div class="bike-details">
            <div>
              <h2 class="buildpart display-5">Standert Carbon Vortex </h2>
              <h3 class="buildprice">Price: Php 1000</h3>
            </div>
            <div class="buildspecs mt-5 fs-4">
              <p>Wheel Size: <span class="detailtext">29"</span></p>
              <p>Suspension: <span class="detailtext">120mm</span></p>
              <p>intended Use: <span class="detailtext">XC</span></p> <!-- di ko alam kung lahat ba may weight-->
            </div>
          </div>
      </div>

      <div class="model col-lg-6 d-flex justify-content-center align-items-center">
        <div id="container3D"></div>
      </div>

      <div class="col-lg-3">
        <div>
          <h3 class="filterbrand"> Filter Brand:</h3>
          <button type="button" class="btn buildfilterbrand dropdown-toggle fs-5" data-bs-toggle="dropdown" aria-expanded="false">
            Choose Brand
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item preoptions" href="#">All</a></li>
            <li><a class="dropdown-item preoptions" href="#">Trinx</a></li>
            <li><a class="dropdown-item preoptions" href="#">Trek</a></li>
            <li><a class="dropdown-item preoptions" href="#">Elves</a></li>
            <li><a class="dropdown-item preoptions" href="#">MountainPeak</a></li>
            <li><a class="dropdown-item preoptions" href="#">Giant</a></li>
          </ul>
        </div>
          <div class="scrollable-options mt-3">
            <img src="pngs/partspng/shimanofronthubpng.png" class="img-fluid mb-2 option" data-model="shimanofronthub" alt="Option 1">
            <img src="pngs/partspng/shimanofronthubpng.png" class="img-fluid mb-2 option" data-model="anotherModel" alt="Option 2">
            <img src="pngs/partspng/shimanofronthubpng.png" class="img-fluid mb-2 option" data-model="thirdModel" alt="Option 3">
          </div>
      </div>      
    </div>

    <div class="row p-0 mt-2 justify-content-center text-center">
      <div class="col-auto mb-3">
        <h3 class="buildtotal">Total Price: <span class="buildtotals">Php 1200</span></h3>
        <button class="viewspecification" data-bs-toggle="modal" data-bs-target="#specifications"> Add</button>
      </div>
      <div class="col-auto mb-3">
        <h3 class="buildtotal">Total Weight: <span class="buildtotals">6kg</span></h3>
        <button class="viewspecification" data-bs-toggle="modal" data-bs-target="#specifications"> Save</button>
      </div>
    </div>
</section>

    
<script type="module" src="scriptfiles/model.js"></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</html>