<?php
session_start();
if(!isset($_SESSION['user'])) {
    header("Location: dashboard.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Resume Builder</title>
<link rel="icon" type="image/png" href="images/ass-logo.png">
<style>
html, body { margin: 0; background: #f5f6fa; font-family: Arial, Helvetica, sans-serif; }
.container { max-width: 1100px; margin: 0 auto; padding: 25px; }
h1 { text-align: center; margin: 20px 0 25px 0; font-size: 28px; font-weight: 700; display: flex; align-items: center; justify-content: center; gap: 12px; }
h1 img { width: 140px; height: auto; margin: 4px; }
.switch-buttons { display: flex; justify-content: center; gap: 14px; margin: 15px 0 25px 0; flex-wrap: wrap; }
.switch-buttons button { padding: 8px 18px; font-size: 14px; border: none; border-radius: 50px; background: linear-gradient(135deg, #28a745, #5ed16b); color: #fff; cursor: pointer; font-weight: 600; box-shadow: 0 2px 6px rgba(0,0,0,0.14); transition: .18s ease; }
.switch-buttons button.active { box-shadow: 0 4px 12px rgba(0,0,0,0.2); }
.templates-wrapper { min-height: 600px; background: #fff; border-radius: 12px; box-shadow: 0 6px 18px rgba(0,0,0,0.08); overflow: hidden; }
.template-box { display: none; padding: 30px 40px; }
.template-box.active { display: block; }
</style>
<script>
function showTemplate(n) {
    for (let i = 1; i <= 5; i++) {
        let t = document.getElementById("t" + i);
        if (t) t.classList.remove("active");
    }
    document.getElementById("t" + n).classList.add("active");
    let buttons = document.querySelectorAll(".switch-buttons button");
    buttons.forEach((btn, index) => {
        if (index + 1 === n) btn.classList.add("active");
        else btn.classList.remove("active");
    });
}
document.addEventListener("DOMContentLoaded", () => { showTemplate(1); });
</script>
</head>
<body>
<div class="container">
    <h1>
        <img src="images/ass-logo.png" alt="ASS Logo">
        📝 Resume Builder – Choose a Template
    </h1>
    <div class="switch-buttons">
        <button onclick="showTemplate(1)">Template 1</button>
        <button onclick="showTemplate(2)">Template 2</button>
        <button onclick="showTemplate(3)">Template 3</button>
        <button onclick="showTemplate(4)">Template 4</button>
        <button onclick="showTemplate(5)">Template 5</button>
    </div>
    <div class="templates-wrapper">
        <div id="t1" class="template-box"><?php include "templates/template1.php"; ?></div>
        <div id="t2" class="template-box"><?php include "templates/template2.php"; ?></div>
        <div id="t3" class="template-box"><?php include "templates/template3.php"; ?></div>
        <div id="t4" class="template-box"><?php include "templates/template4.php"; ?></div>
        <div id="t5" class="template-box"><?php include "templates/template5.php"; ?></div>
    </div>
    <div style="text-align:center; margin-top:30px;">
        <a href="logout.php" class="btn" style="background:#dc3545;">Logout</a>
    </div>
</div>
</body>
</html>
