

	<?php include 'includes/header.php'; ?>

<body class = "">
	
	<h1 class = "text-center">Post Run</h1>
	<div class = "small-container">
	<form method="POST" name="contactform" action="contact-form-handler.php">
		<div class="mb-3">
			<label class="form-label" for='uName'>Your Username:</label> <br>
			<input class="form-control" type="text" name="uName">
		</div>
		<div class="mb-3">
			<label for='email'>Email Address:</label> <br>
			<input class="form-control"type="text" name="email"> <br>
		</div>
		<div class="mb-3">
			<label for='time'>Time:</label> <br>
			<input class="form-control"type="text" id="time" name="time" pattern="[0-9]{2}:[0-9]{2}:[0-9]{2}" required>
		</div>
		<div class="mb-3">
			<label for="game">Game:</label><br>
			<input class="form-control"type="text" id="game" name="game">
		</div>
		<div class="mb-3">
		<p>Select language:</p>
		<input type="radio" id="english" name="language" value="English">
		<label for="english">English</label><br>
		<input type="radio" id="spanish" name="language" value="Spanish">
		<label for="english">Spanish</label><br>
		<input type="radio" id="French" name="language" value="French">
		<label for="english">French</label><br>
		<br>
		</div>
		
		<div class="mb-3">
		<p>Link to Run:</p>
		<input class="form-control" type="text" id="runLink"/>
		</div>
		<div class="mb-3">
		<p>Platform:</p>
		<input type="radio" id="console" name="platform" value="console">
		<label for="console">Console</label><br>
		<input type="radio" id="pc" name="platform" value="pc">
		<label for="pc">PC</label><br>
		</div>

		<input type="submit" class="btn btn-primary" value="Submit"><br>
		
	</form>

	</div>
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

		slider.oninput = function() {
			output.innerHTML = this.value;
		}
	</script>
</body>

<?php include 'includes/footer.php'; ?>

</html>