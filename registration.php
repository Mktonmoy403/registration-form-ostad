<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>


<?php
		// Registration Form Validation
		if(isset($_POST['registration'])){
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$confirm_password = $_POST['confirm_password'];

			// Check if all fields are filled
			if(empty($fname) || empty($lname) || empty($email) || empty($password) || empty($confirm_password)){
				echo "Please fill all fields!";
			}
			// Check if email is valid
			elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				echo "Please enter a valid email address!";
			}
			// Check if password and confirm password match
			elseif($password !== $confirm_password){
				echo "Password and confirm password do not match!";
			}
			// Registration Successful
			else{
				echo "Registration Successful! Welcome, $fname!";
				// You can add code here to store user details in database
			}
		}
	?>
<<!-- Registration Form -->
<h2>Registration Form</h2>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<label>First Name:</label>
		<input type="text" name="fname" required>
		<br><br>
		<label>Last Name:</label>
		<input type="text" name="lname" required>
		<br><br>
		<label>Email Address:</label>
		<input type="email" name="email" required>
		<br><br>
		<label>Password:</label>
		<input type="password" name="password" required>
		<br><br>
		<label>Confirm Password:</label>
		<input type="password" name="confirm_password" required>
		<br><br>
		<input type="submit" name="registration" value="Register">
	</form>

	
</body>
</html>