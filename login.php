<!-- Login Form -->
<h2>Login Form</h2>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<label>Email Address:</label>
		<input type="email" name="login_email" required>
		<br><br>
		<label>Password:</label>
		<input type="password" name="login_password" required>
		<br><br>
		<input type="submit" name="login" value="Login">
	</form>

	<?php
		// Login Form Validation
		if(isset($_POST['login'])){
			$login_email = $_POST['login_email'];
			$login_password = $_POST['login_password'];

			// Check if both fields are filled
			if(empty($login_email) || empty($login_password)){
				echo "Please fill all fields!";
			}
			// Check if email and password match
			// You can replace this code with your database query to check user credentials
			elseif($login_email !== 'test@example.com' || $login_password !== 'testpassword'){
				echo "Invalid email or password!";
			}
			// Login Successful
			else{
				$fname = "Test"; // Replace with your database query to get user first name
				header("Location: welcome.php?fname=$fname");
				exit();
			}
		}
	?>