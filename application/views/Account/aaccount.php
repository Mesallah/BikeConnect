<?php
session_start();
require_once 'database.php';

// Check if the user is logged in, if not, redirect to login
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

// Fetch user details from the database
$user_id = $_SESSION['user'];  // Assuming $_SESSION['user'] contains user ID
$sql = "SELECT * FROM user WHERE id = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "i", $user_id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

// Check if the user is found
if ($result && mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);
} else {
    // If user not found, handle the error (e.g., log out the user)
    echo "User not found.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="accountstyles.css">
</head>
<body>
<?php include("navbar.php"); ?>

<div class="d-flex">
    <div class="sidebar col-lg-2">
        <div class="sidebar d-flex flex-column flex-shrink-0 p-3" style="width: 280px; height: 650px;">
            <ul class="nav nav-pills flex-column mt-4">
                <li class="nav-item mt-3">
                    <a href="#" class="nav-link active" aria-current="page">Account Details</a>
                </li>
                <li class="nav-item">
                    <a href="asavedbuilds.php" class="nav-link mt-3">Saved Builds</a>
                </li>
                <li class="nav-item">
                    <a href="afavorites.php" class="nav-link mt-3">Favorites</a>
                </li>
                <li class="nav-item mt-5">
                    <a href="logout.php" class="btn btn-danger">Logout</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Content Section -->
    <div class="content p-4 col-lg-10">
        <div class="container-fluid content">
            <div class="row pt-5">
                <div class="col-lg-3 p-3">
                    <img src="svgfiles/person-svgrepo-com.svg" alt="svg file here" class="accountpicsvg">
                </div>
                <div class="accountinfo col-lg-9 mt-5">
                    <h1 class="display-3"><?php echo htmlspecialchars($user['fname'] . ' ' . $user['lname']); ?></h1>
                    <button class="editaccount" data-bs-toggle="modal" data-bs-target="#editaccount">Edit Account</button>
                    <div class="mt-5 fs-5">
                        <p>Username: <?php echo htmlspecialchars($user['uname']); ?></p>
                        <p>Email: <?php echo htmlspecialchars($user['email']); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- -------------------------------- EDIT ACCOUNT MODAL -------------------------------- -->

<div class="modal fade modal1" id="editaccount" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content p-1">
            <div class="modal-header p-3">
                <h5 class="modal-title" id="loginlabel">Edit Account</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body container-fluid p-2">
                <form action="update_account.php" method="post">
                    <div class="row mt-1 p-2">
                        <div class="col-md-12 col-sm-12">
                            <div class="d-flex align-items-center justify-content-center">
                                <img src="svgfiles/person-svgrepo-com.svg" alt="svg file here" class="accountpicsvgtwo">
                                <p class="changephoto fs-4 ms-3">Change Photo</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-6 mb-3">
                            <div class="accountdets col-lg-12 d-flex align-items-center justify-content-around">
                                <label for="firstname" class="login form-label fs-4">First Name:</label>
                                <input type="text" class="boxes form-control" id="firstname" name="firstname" value="<?php echo htmlspecialchars($user['fname']); ?>" required>    
                            </div>
                            <div class="accountdets col-lg-12 d-flex align-items-center justify-content-around">
                                <label for="username" class="login form-label fs-4">Username:</label>
                                <input type="text" class="boxes form-control" id="username" name="username" value="<?php echo htmlspecialchars($user['uname']); ?>" required>    
                            </div>
                            <div class="accountdets col-lg-12 d-flex align-items-center justify-content-around">
                                <label for="password" class="login form-label fs-4">Password:</label>
                                <input type="password" class="boxes form-control" id="password" name="password" placeholder="Leave blank to keep password">
                            </div>
                        </div>

                        <div class="col-lg-6 mb-3">
                            <div class="accountdets col-lg-12 d-flex align-items-center justify-content-around">
                                <label for="lastname" class="login form-label fs-4">Last Name:</label>
                                <input type="text" class="boxes form-control" id="lastname" name="lastname" value="<?php echo htmlspecialchars($user['lname']); ?>" required>    
                            </div>
                            <div class="accountdets col-lg-12 d-flex align-items-center justify-content-around">
                                <label for="email" class="login form-label fs-4">Email:</label>
                                <input type="text" class="boxes form-control" id="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required>    
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex justify-content-center">
                        <button type="submit" class="done btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
