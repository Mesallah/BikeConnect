<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Brands</title>
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

<?php $this->load->view('navbar'); ?>
<!-- -------------------------------- TOP BRANDS -------------------------------- -->

<section class="newr container-fluid">
    <div class="row p-0 m-0">
        <div class="col-12 mt-4 ms-2">
            <h1 class="savedbuilds display-3">Top Brands</h1>
        </div>
    </div>
    <div class="row p-0 m-0">
      <div class="col-12 d-flex justify-content-center">
        <img class="topbrandslogo img-fluid" src="<?= base_url('assets/pngs/asdasda.png') ?>" alt="image shown">
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

<!-- -------------------------------- BRANDS & CATEGORIES -------------------------------- -->
<!--
  <section class="newr container-fluid mb-5">
    <div class="row p-0 mb">
      <div class="col-lg-4 mt-4 d-flex align-items-center">
        <p class="prebrands fs-3 mb-0 me-5 ms-1">Brands:</p>
        <button type="button" class="btn brandbtn dropdown-toggle fs-4" data-bs-toggle="dropdown" aria-expanded="false">
          Choose Brand
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item preoptions" href="#">Trinx</a></li>
          <li><a class="dropdown-item preoptions" href="#">Trek</a></li>
          <li><a class="dropdown-item preoptions" href="#">Elves</a></li>
          <li><a class="dropdown-item preoptions" href="#">MountainPeak</a></li>
          <li><a class="dropdown-item preoptions" href="#">Giant</a></li>
        </ul>
      </div>
      <div class="col-lg-4 mt-4 d-flex align-items-center">
        <p class="precategory fs-3 mb-0 me-5 ms-1">Category:</p>
        <button type="button" class="btn brandbtn dropdown-toggle fs-4" data-bs-toggle="dropdown" aria-expanded="false">
          Choose Category
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item preoptions" href="#">Gravel</a></li>
          <li><a class="dropdown-item preoptions" href="#">Mountain</a></li>
          <li><a class="dropdown-item preoptions" href="#">Road</a></li>
        </ul>
      </div>
      <div class="col-lg-4 mt-4 d-flex align-items-center">
        <p class="precategory fs-3 mb-0 me-5 ms-1">Part:</p>
        <button type="button" class="btn brandbtn dropdown-toggle fs-4" data-bs-toggle="dropdown" aria-expanded="false">
          Choose Part
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item preoptions" href="#">Frame</a></li>
          <li><a class="dropdown-item preoptions" href="#">Rear Shock</a></li>
          <li><a class="dropdown-item preoptions" href="#">Frame Protection</a></li>
        </ul>
      </div>
    </div>
  </section>
-->
<!-- -------------------------------- CUSTOM BUILDS -------------------------------- -->

<div class="newr container-fluid mt-5">
    <div class="row">
        <?php
        if (!empty($result)) { // Check if $result is not empty
            foreach ($result as $row) {
                // Redirect link to topbrandsspecs.php with part_id as a parameter
                echo '<a href="' . site_url('home/topbrandsspecs/' . $row['part_id']) . '" class="col-12 col-sm-6 col-md-6 col-lg-4 mt-3 text-decoration-none text-dark">';
                echo '  <div class="options p-3 mb-3" style="cursor: pointer;">';
                echo '      <h5 class="model-name">' . htmlspecialchars($row['model']) . '</h5>';
                echo '      <div class="image-container text-center">';
                echo '          <img class="card-img-top img-fluid w-50" src="' . base_url(htmlspecialchars($row['image_path'])) . '" alt="' . htmlspecialchars($row['model']) . ' Image">';
                echo '      </div>';
                echo '      <p class="card-text">Price: ' . htmlspecialchars($row['price']) . ' PHP</p>';
                echo '      <p class="card-text">Weight: ' . htmlspecialchars($row['weight']) . '</p>';
                echo '  </div>';
                echo '</a>';
            }
        } else {
            echo '<p>No parts found</p>';
        }
        ?>
    </div>
</div>








</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</html>