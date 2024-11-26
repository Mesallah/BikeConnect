<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Brands</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/topbrandsspecsstyles.css'); ?>">
</head>
<body>
    
<?php $this->load->view('navbar'); ?>

<!-- Main Content -->
<section class="savedbuildsspecs container-fluid">
    <div class="row ms-2 p-0 pt-5 m-0">
        <!-- Bike Details Section -->
        <div class="col-lg-4">
            <div class="bike-details">
                <h2 class="savedpart display-4">Top Brands</h2>
                <h2 class="savedname fs-2"><?php echo htmlspecialchars($part['model']); ?></h3>
                <h4 class="savedprice mt-2">Price: Php <?php echo htmlspecialchars($part['price']); ?></h3>
                <h4 class="savedprice mt-2">Color: <?php echo htmlspecialchars($part['color']); ?></h3>
                <h4 class="savedprice mt-2">Material: <?php echo htmlspecialchars($part['material']); ?></h3>
                <h4 class="savedprice mt-2">Size: <?php echo htmlspecialchars($part['size']); ?></h3>
            </div>
            <div class="addtofav mt-5">
                <button class="savedviewspecification" data-bs-toggle="modal" data-bs-target="#specifications">Add to Favorites</button>
            </div>
            <div class="goback mt-3 mb-4">
                <button class="savedviewspecification" onclick="window.history.back();">Go back</button>
            </div>
        </div>

        <!-- Image Section -->
        <div class="col-lg-8 d-flex justify-content-center align-items-center">
        <img 
            src="<?php echo base_url(htmlspecialchars($part['image_path'])); ?>" 
            class="img-fluid" 
            alt="Bike Image">
    </div>
</section>

<!-- Popper.js and Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" crossorigin="anonymous"></script>    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>

</body>
</html>
