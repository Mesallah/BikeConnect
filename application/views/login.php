<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="loginsignup.css">
</head>
<body>


    <!-- -------------------------------- LOGIN MODAL -------------------------------- -->
	<div class="container-fluid">
		<div class="container mt-5">
				<div class="header-login p-3">
					<h5 class="title-login" id="loginlabel">Login</h5>
				</div>
					<div class="row mt-1 p-2">
						<div class="col-md-6 col-sm-12">
							<form>
								<div class="mb-3">
									<label for="username" class="login form-label">Username</label>
									<input type="text" class="boxes form-control" id="username" name="username" placeholder="Enter your Username" required>
								</div>
								<div class="mb-3">
									<label for="password" class="login form-label">Password</label>
									<input type="password" class="boxes form-control" id="password" name="password" placeholder="Enter your Password" required>
								</div>
								<div class="row mt-1">
									<div class="col-md-6">
										<input type="checkbox" id="rememberme" name="rememberme" class="checkboxbutton">
										<label class="rememberme" for="rememberme">Remember Me</label>
									</div>
									<div class="col-md-6 text-end">
										<a href="#" class="forgotpassword">Forgot Password?</a>
									</div>
								</div>
								<div class="mt-4">
    							<a href="homepage.php">
        						<button type="button" class="loginbutton">Login</button>
    							</a>
									</div>
								<div class="signup-link mt-2">
									<p class="wantaccount"><span class="normal-text">Don't have an account?</span>  
									<a href="register.php" class="goto"><u>Sign Up</u></a>
									</p>
								</div>
							</form>
						</div>
						<div class="col-md-6 col-sm-12 d-flex align-items-top">
							<img src="pngs/asdasda.png" alt="imagehere" class="rotated img-fluid ">
						</div>
					</div>
		</div>
	</div>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>    
</body>
</html>