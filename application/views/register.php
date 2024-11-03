<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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

<!-- -------------------------------- SIGN-UP MODAL -------------------------------- -->  
<div class="container-fluid">
	<div class="container mt-5" id="reg">
			<div class="header-reg p-3">
				<h5 class="title-reg" id="reglabel">Register</h5>
			</div>
				<div class="row mt-1 p-2">
					<div class="col-md-6 col-sm-12">
						<form>
							<div class="row mt-1">
								<div class="col-md-6 mb-3">
									<label for="firstname" class="register form-label">First Name</label>
									<input type="text" class="boxes form-control" id="firstname" name="firstname" placeholder="Enter your First Name" required>
								</div>
								<div class="col-md-6 mb-3">
									<label for="lastname" class="register form-label">Last Name</label>
									<input type="text" class="boxes form-control" id="lastname" name="lastname" placeholder="Enter your Last Name" required>
								</div>
							</div>
							<div class="row mt-1">
								<div class="col-md-6 mb-3">
									<label for="regusername" class="register form-label">Username</label>
									<input type="text" class="boxes form-control" id="regusername" name="regusername" placeholder="Enter your Username" required>
								</div>
								<div class="col-md-6 mb-3">
									<label for="email" class="register form-label">Email</label>
									<input type="text" class="boxes form-control" id="email" name="email" placeholder="Enter your Email" required>
								</div>
							</div>
							<div class="row mt-1">
								<div class="col-lg-12 mb-3">
									<label for="regpassword" class="register form-label">Password</label>
									<input type="password" class="boxes form-control" id="regpassword" name="regpassword" placeholder="Minimum of 8 characters" required>
								</div>
								<div class="col-lg-12 mb-3">
									<label for="repassword" class="register form-label">Re-enter Password</label>
									<input type="password" class="boxes form-control" id="repassword" name="repassword" placeholder="Minimum of 8 characters" required>
								</div>
							</div>
							<div class="row mt-1">
								<div class="col-md-12">
									<input type="checkbox" id="agree" name="agree" class="agreeterms">
									<label class="agree" for="agree">I agree to all terms, privacy policies, and fees</label>
								</div>
							</div>
							<div class="mt-4">
								<button type="button" class="registerbutton">Register</button>
							</div>
							<div class="signup-link mt-2">
								<p class="haveaccount"><span class="normal-text">Already have an account?</span>  
								<a href="login.php" class="goto"><u>Log in</u></a>
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

<!--
<div class="container-fluid">
	<div class="container-signup mt-5">
			<div class="header- p-3">
				<h5 class="title-signup" id="loginlabel">Login</h5>
			</div>
				<div class="row mt-1 p-2">
					<div class="col-md-6 col-sm-12">
					<form>
						<div class="row mt-1">
							<div class="col-md-6 mb-3">
								<label for="firstname" class="register form-label">First Name</label>
								<input type="text" class="boxes form-control" id="firstname" name="firstname" placeholder="Enter your First Name" required>
							</div>
							<div class="col-md-6 mb-3">
								<label for="lastname" class="register form-label">Last Name</label>
								<input type="text" class="boxes form-control" id="lastname" name="lastname" placeholder="Enter your Last Name" required>
							</div>
						</div>
						<div class="row mt-1">
							<div class="col-md-6 mb-3">
								<label for="regusername" class="register form-label">Username</label>
								<input type="text" class="boxes form-control" id="regusername" name="regusername" placeholder="Enter your Username" required>
							</div>
							<div class="col-md-6 mb-3">
								<label for="email" class="register form-label">Email</label>
								<input type="text" class="boxes form-control" id="email" name="email" placeholder="Enter your Email" required>
							</div>
						</div>
						<div class="row mt-1">
							<div class="col-lg-12 mb-3">
								<label for="regpassword" class="register form-label">Password</label>
								<input type="password" class="boxes form-control" id="regpassword" name="regpassword" placeholder="Minimum of 8 characters" required>
							</div>
							<div class="col-lg-12 mb-3">
								<label for="repassword" class="register form-label">Re-enter Password</label>
								<input type="password" class="boxes form-control" id="repassword" name="repassword" placeholder="Minimum of 8 characters" required>
							</div>
						</div>
						<div class="row mt-1">
							<div class="col-md-12">
								<input type="checkbox" id="agree" name="agree" class="agreeterms">
								<label class="agree" for="agree">I agree to all terms, privacy policies, and fees</label>
							</div>
						</div>
						<div class="mt-4">
							<button type="button" class="registerbutton">Register</button>
						</div>
						<div class="signup-link mt-2">
							<p class="haveaccount"><span class="normal-text">Already have an account?</span>  
							<a class="craftnow" data-bs-toggle="modal" data-bs-target="#exampleModal"><u>Log in</u></a>
							</p>
						</div>
					</form>
				</div>
				<div class="col-md-4 col-sm-12 d-flex align-items-center">
					<img src="pngs/asdasda.png" alt="imagehere" class="rotatedsecond img-fluid ">
				</div>
			</div>
		</div>
	</div>-->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>    
</body>
</html>