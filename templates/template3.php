<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Premium Resume </title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #1f1c2c, #928dab);
            margin: 0;
            padding: 0;
        }
        .template4-wrapper {
            max-width: 700px;
            margin: 40px auto;
            background: #222;
            padding: 30px;
            border-radius: 15px;
            color: #fff;
            box-shadow: 0 8px 30px rgba(0,0,0,0.3);
        }
        .template4-wrapper h2 {
            text-align: center;
            font-size: 28px;
            margin-bottom: 25px;
            letter-spacing: 1px;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 18px;
        }
        input, textarea {
            padding: 14px;
            border-radius: 12px;
            border: none;
            outline: none;
            font-size: 16px;
        }
        textarea { height: 90px; resize: vertical; }
        label { font-weight: bold; margin-top: 10px; }
        button {
            padding: 15px;
            border-radius: 15px;
            border: none;
            background: gold;
            color: #000;
            font-weight: bold;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover { background: #ffd700; }
    </style>
</head>
<body>

<div class="template4-wrapper">
    <h2>✨ Premium Pro Resume Template 4</h2>

    <form action="generate_resume3.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="Email Address" required>
        <input type="text" name="phone" placeholder="Phone Number" required>
        <input type="text" name="address" placeholder="Full Address" required>
        <textarea name="summary" placeholder="Professional Summary..." required></textarea>
        <textarea name="education" placeholder="Education Details" required></textarea>
        <textarea name="experience" placeholder="Work Experience" required></textarea>
        <textarea name="skills" placeholder="Key Skills" required></textarea>

        <label>Upload Profile Picture</label>
        <input type="file" name="profile_picture">

        <button type="submit">Generate Premium Resume</button>
    </form>
</div>

</body>
</html>
