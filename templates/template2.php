<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Premium Resume Template 3</title>

	<!-- Page Styling -->
	<style>

		body {
			font-family: Arial, sans-serif;
			background: #e9ecf3;
			margin: 0;
			padding: 0;
		}

		.template3-wrapper {
			max-width: 850px;
			margin: 40px auto;
			background: linear-gradient(135deg, #6a11cb, #2575fc);
			padding: 40px;
			border-radius: 20px;
			color: #fff;
			box-shadow: 0 10px 40px rgba(0,0,0,0.25);
		}

		h2 {
			text-align: center;
			font-size: 34px;
			margin-bottom: 30px;
			font-weight: bold;
		}

		.template3-form {
			display: flex;
			flex-direction: column;
			gap: 20px;
		}

		.template3-form input,
		.template3-form textarea {
			padding: 16px;
			border-radius: 14px;
			border: none;
			outline: none;
			font-size: 16px;
			box-shadow: inset 0 0 0 2px rgba(255,255,255,0.3);
		}

		.template3-form textarea {
			min-height: 120px;
			resize: vertical;
		}

		.template3-wrapper label {
			font-weight: bold;
			font-size: 16px;
			margin-top: 5px;
		}

		/* Stylish File Upload */
		.file-input {
			background: rgba(255,255,255,0.2);
			padding: 14px;
			border-radius: 14px;
			color: #fff;
			cursor: pointer;
		}

		.template3-wrapper button {
			padding: 18px;
			border-radius: 14px;
			background: #ffca28;
			color: #000;
			border: none;
			font-size: 20px;
			font-weight: bold;
			cursor: pointer;
			margin-top: 10px;
			transition: 0.3s;
		}

		.template3-wrapper button:hover {
			background: #ffd95a;
		}

	</style>
</head>

<body>

	<div class="template3-wrapper">

		<h2>🎨 Premium Colorful Resume Template</h2>

		<form class="template3-form" action="generate_resume2.php" method="POST" enctype="multipart/form-data">

			<input type="text" name="name" placeholder="Full Name" required>

			<input type="email" name="email" placeholder="Email Address" required>

			<input type="text" name="phone" placeholder="Phone Number" required>

			<input type="text" name="address" placeholder="Full Address" required>

			<textarea name="summary" placeholder="Professional Summary..." required></textarea>

			<textarea name="education" placeholder="Education Details" required></textarea>

			<textarea name="experience" placeholder="Work Experience" required></textarea>

			<textarea name="skills" placeholder="Key Skills" required></textarea>

			<label>Upload Profile Picture</label>
			<input type="file" name="profile_picture" class="file-input">

			<button type="submit">Generate Premium Resume</button>

		</form>

	</div>

</body>
</html>
