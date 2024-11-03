<?php
// Database connection
require_once 'database.php';

// Fetch parts from the database
$sql = "SELECT * FROM part";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parts List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php include("navbar.php"); ?>

<!-- Parts List Section -->
<section class="partslist container-fluid">
  <div class="row p-0 m-0">
    <div class="col-12 mt-4 ms-2">
      <h1 class="partshead display-3">Parts List</h1>
    </div>
  </div>
  <div class="row p-0 m-0">  
    <div class="col-lg-6 col-md-6 d-flex align-items-center">
      <label for="search" class="partssearch form-label ms-2 me-2 fs-4">Search:</label>
      <input type="text" id="search" name="search" class="form-control" placeholder="Search">
    </div>     
    <div class="col-lg-3 col-md-3">
      <h2 class="partsprice me-2 fs-4">Price</h2>
    </div>
    <div class="col-lg-3 col-md-3">
      <h2 class="partsweight me-2 fs-4">Weight</h2>
    </div>
  </div>
</section>
  
<section>
  <div class="partslist container-fluid ">
  <div class="row ms-2 p-0 m-0">
    <div class="col-lg-2">
      <section>
        <div class="sidenav1">
          <div class="sidenav-section">
            <div class="sidenav-header fs-4">Category</div>
            <div class="sidenav-content">
              <a href="#mountain">Mountain</a>
              <a href="#road">Road</a>
              <a href="#grave">Grave</a>
            </div>
          </div>
          <div class="sidenav-section">
            <div class="sidenav-header fs-4">Brands</div>
            <div class="sidenav-content">
              <a href="#all">All</a>
              <a href="#trinx">Trinx</a>
              <a href="#trek">Trek</a>
              <a href="#elves">Elves</a>
              <a href="#mountainpeak">Mountainpeak</a>
              <a href="#giant">Giant</a>
            </div>
          </div>
          <div class="sidenav-section">
            <div class="sidenav-header fs-4">Parts</div>
            <div class="sidenav-content">
              <a href="#all">All</a>
              <a href="#trinx">Frame</a>
              <a href="#trek">Rear Shock</a>
              <a href="#elves">Fork</a>
              <a href="#mountainpeak">Fork Decals</a>
              <a href="#giant">Steer Tube Tool</a>
            </div>
          </div>
        </div>
      </section>
    </div>
  
  
    <div class="col-10">
      <div class="row mt-3">
        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                // Display each part as a clickable element
                echo '<div class="col-lg-4 col-md-6 mb-4">';  
                echo '  <div class="card h-100">';
                echo '      <img class="card-img-top" src="pngs/standert.png" alt="Part image">';
                echo '      <div class="card-body">';
                echo '          <h5 class="card-title">'. htmlspecialchars($row['model']) .'</h5>';
                echo '          <p class="card-text">Price: '. htmlspecialchars($row['price']) .' PHP</p>';
                echo '          <p class="card-text">Weight: '. htmlspecialchars($row['weight']) .'</p>';
                echo '          <button class="btn btn-primary view-details" data-bs-toggle="modal" data-bs-target="#partModal'. htmlspecialchars($row['part_id']) .'">View Details</button>';
                echo '      </div>';
                echo '  </div>';
                echo '</div>';

                // Modal for each part
                echo '<div class="modal fade" id="partModal'. htmlspecialchars($row['part_id']) .'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">';
                echo '  <div class="modal-dialog modal-lg">';
                echo '      <div class="modal-content">';
                echo '          <div class="modal-header">';
                echo '              <h5 class="modal-title" id="exampleModalLabel">'. htmlspecialchars($row['model']) .'</h5>';
                echo '              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
                echo '          </div>';
                echo '          <div class="modal-body">';
                echo '              <p>Color: '. htmlspecialchars($row['color']) .'</p>';
                echo '              <p>Material: '. htmlspecialchars($row['material']) .'</p>';
                echo '              <p>Size: '. htmlspecialchars($row['size']) .'</p>';
                echo '              <p>Weight: '. htmlspecialchars($row['weight']) .'</p>';
                echo '              <p>Diameter: '. htmlspecialchars($row['diameter']) .'</p>';
                echo '              <p>Price: '. htmlspecialchars($row['price']) .' PHP</p>';
                echo '          </div>';
                echo '          <div class="modal-footer">';
                echo '              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>';
                echo '          </div>';
                echo '      </div>';
                echo '  </div>';
                echo '</div>';
            }
        } else {
            echo '<p>No parts found</p>';
        }
        ?>
      </div>
    </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
