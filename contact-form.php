<!DOCTYPE HTML>
<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet">
	<title>Contact us</title>

<?php include 'includes/header.php';?>
<body>
	<h1>Contact us</h1>
	<form method="POST" name="contactform" action="contact-form-handler.php" class = "form-inline">
		<p>
			<label for='name'>Your Name:</label> <br>
			<input type="text" name="name">
		</p>
		<p>
			<label for='email'>Email Address:</label> <br>
			<input type="text" name="email"> <br>
		</p>
		<p>
			<label for='message'>Message:</label> <br>
			<textarea name="message"></textarea>
		</p>
		<label for="phone">Enter your phone number:</label><br>
		<input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}[0-9]{4}" required>
		<small>Format: 123-4567890</small>

		<p>Select language:</p>
		<input type="radio" id="english" name="language" value="English">
		<label for="english">English</label><br>
		<input type="radio" id="spanish" name="language" value="Spanish">
		<label for="english">Spanish</label><br>
		<input type="radio" id="polish" name="language" value="Polish">
		<label for="english">Polish</label>

		<br>

		<p>Age:<span id="value"></span></p>
		<input type="range" id="age" min="1" max="100" value="50">

		
		<input type="submit" value="Submit"><br>
	</form>

	<script language="JavaScript">
		var frmvalidator = new Validator("contactform");
		frmvalidator.addValidation("name", "req", "Please provide your name");
		frmvalidator.addValidation("email", "req", "Please provide your email");
		frmvalidator.addValidation("email", "email", "Please enter a valid email address"); 
	</script>
<script language="JavaScript">
	var slider = document.getElementById("age");
	var output = document.getElementById("value");
	output.innerHTML = slider.value;

	slider.oninput = function () {
		output.innerHTML = this.value;
	}
</script>
</body>

<?php include 'includes/footer.php';?>

</html>