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
    <link rel="stylesheet" href="<?php echo base_url('assets/css/topbrandsspecsstyles.css'); ?>">
</head>
<body>
    
<?php $this->load->view('navbar'); ?>

<!-- -------------------------------- MAIN CONTENT -------------------------------- -->

<section class="savedbuildsspecs container-fluid">
    <div class="row ms-2 p-0 pt-5 m-0">
        <div class="col-lg-4">
            <div class="bike-details">
                <div>
                    <h2 class="savedpart display-4">Top Brands</h2>
                    <!-- Dynamically display part model name -->
                    <h3 class="savedname fs-2"><?php echo htmlspecialchars($part['model']); ?></h3>
                    <!-- Dynamically display part price -->
                    <h3 class="savedprice mt-2">Price: Php <?php echo htmlspecialchars($part['price']); ?></h3>
                </div>
                <div class="buildspecs mt-4 fs-5">
                    <!-- Dynamically display part details -->
                    <p class="mb-1">Color: <span class="detailtext"><?php echo htmlspecialchars($part['color']); ?></span></p>
                    <p class="mb-1">Material: <span class="detailtext"><?php echo htmlspecialchars($part['material']); ?></span></p>
                    <p class="mb-1">Size: <span class="detailtext"><?php echo htmlspecialchars($part['size']); ?></span></p>
                    <p class="mb-1">Weight: <span class="detailtext"><?php echo htmlspecialchars($part['weight']); ?></span></p>
                    <p class="mb-1">Diameter: <span class="detailtext"><?php echo htmlspecialchars($part['diameter']); ?></span></p>
                </div>
            </div>
            <div class="addtofav">
                <button class="savedviewspecification" data-bs-toggle="modal" data-bs-target="#specifications">Add to Favorites</button>
            </div>
            <div class="goback mt-3 mb-4">
                <!-- You can change the button to redirect to another page or remove the modal functionality -->
                <button class="savedviewspecification" onclick="window.history.back();">Go back</button>
            </div>
        </div>

        <div class="col-lg-8 d-flex justify-content-center align-items-center">
            <!-- Dynamically display the image -->
            <img src="pngs/<?php echo htmlspecialchars($part['image']); ?>" class="img-fluid" alt="Bike Image">
        </div>      
    </div>
</section>





    
    
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</html>