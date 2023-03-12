<?php include 'includes/header.php'; ?>

<title>Post Run</title>
<body style="background-color:#CFCBC9">

	<h1 class="text-center my-2">Post Run</h1>
	<div class="small-container border border-dark p-2" style="background-color:#FFFFFF">
		<form method="POST" name="contactform" action="contact-form-handler.php">
			<div class="mb-3">
				<span style="color: red;">*</span><label class="form-label" for='uName'>Your Username:</label> <br>
				<input class="form-control" type="text" id = "uName" name="uName" placeholder="jDoe23" onchange="username_validation();" required>
				<span id="name_err"></span>
			</div>
			<div class="mb-3">
			<span style="color: red;">*</span><label for='email'>Email Address:</label> <br>
				<input class="form-control" type="text"id="email" name="email" pattern="[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})" placeholder="johndoe@example.com" onchange="email_validation()" required> <br>
				<span id="email_err"></span>
			</div>
			<div class="mb-3">
			<span style="color: red;">*</span><label for='time'>Time:</label> <br>
				<input class="form-control" type="text" id="time" name="time" pattern="[0-9]{2}:[0-9]{2}:[0-9]{2}" placeholder="00:00:00" onchange="time_validation()"required>
				<span id="time_err"></span>
			</div>
			<div class="mb-3">
				<label for="game">Game:</label><br>
				<input class="form-control" type="text" id="game" name="game" placeholder="Minecraft">
			</div>
			<div class="mb-3">
				<p>Select language:</p>
				<input type="radio" id="english" id = "language_e"name="language" onblur = "language_validation()"value="English">
				<label for="english">English</label><br>
				<input type="radio" id="spanish" id = "language_s" name="language" value="Spanish">
				<label for="english">Spanish</label><br>
				<input type="radio" id="French" id = "language_f" name="language" value="French">
				<label for="english">French</label><br>
				<br>
			</div>

			<div class="mb-3">
			<span style="color: red;">*</span><label>Link to Run:</label>
				<input class="form-control" type="text" id="runLink" pattern="(https?:\/\/)?(www\.)?(youtube\.com\/watch\?v=)([a-zA-Z0-9_-]{11})" placeholder="https://www.youtube.com/watch?v=dQw4w9WgXcQ"required/>
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
	
	<script src="validation.js"></script>
</body>

<?php include 'includes/footer.php'; ?>

</html>