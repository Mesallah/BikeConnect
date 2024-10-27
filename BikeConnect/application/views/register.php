<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <h1>Register</h1>
  <form method="post" 
    action="<?= base_url() ?>Mydb/mysave">
	<label for="uname">Username:</label><input type="text" name="uname"> <br>
	<label for="pass">Password:</label><input type="text" name="pass"> <br>
	<label for="fname">Firstname:</label><input type="text" name="fname"> <br>
	<label for="mname">Middlename:</label><input type="text" name="mname"> <br>
	<label for="lname">Lastname:</label><input type="text" name="lname"> <br>
	<input type="submit" name="save" value="Submit">
  </form>	
</body>
</html>