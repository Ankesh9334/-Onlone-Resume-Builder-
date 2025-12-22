<?php
// Safe variables
$name       = $_POST['name'] ?? '';
$email      = $_POST['email'] ?? '';
$phone      = $_POST['phone'] ?? '';
$address    = $_POST['address'] ?? '';
$summary    = $_POST['summary'] ?? '';
$education  = $_POST['education'] ?? '';
$experience = $_POST['experience'] ?? '';
$skills     = $_POST['skills'] ?? '';


$profilePicPath = "";
if (!empty($_FILES['profile_picture']['name'])) {
    $uploadDir = "uploads/";
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }
    $fileName = time() . "_" . basename($_FILES['profile_picture']['name']);
    $uploadFile = $uploadDir . $fileName;
    if (move_uploaded_file($_FILES['profile_picture']['tmp_name'], $uploadFile)) {
        $profilePicPath = $uploadFile;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Resume Preview</title>

<!-- HTML2PDF -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>

<style>

@page {
    size: A4;
    margin: 0;
}

body {
    margin: 0;
    padding: 0;
    background: #f0f0f0;
    font-family: Arial, sans-serif;
}

/* ===== CONTROLS ===== */
.controls {
    text-align: center;
    padding: 15px;
    background: #111;
}

.controls button {
    padding: 12px 18px;
    font-size: 15px;
    border: none;
    border-radius: 6px;
    margin: 0 6px;
    cursor: pointer;
    font-weight: bold;
}

.edit { background: #ffc107; }
.save { background: #28a745; color: #fff; }
.download { background: #007bff; color: #fff; }

/* ===== RESUME ===== */
#resume {
    width: 210mm;
    min-height: 297mm;
    margin: 0 auto;
    padding: 20mm;
    background: #222;
    color: #fff;
    box-sizing: border-box;
}

/* HEADER */
.header {
    text-align: center;
    margin-bottom: 20px;
}

.profile-pic {
    width: 120px;
    height: 120px;
    margin: 0 auto 10px;
    border-radius: 50%;
    overflow: hidden;
    border: 4px solid #fff;
}

.profile-pic img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.header h1 {
    margin: 8px 0;
    font-size: 30px;
}

.header p {
    margin: 4px 0;
    font-size: 15px;
}

/* SECTIONS */
.section {
    margin-bottom: 18px;
}

.section h2 {
    color: gold;
    font-size: 20px;
    margin-bottom: 6px;
    border-bottom: 2px solid gold;
    padding-bottom: 4px;
}

.section div {
    font-size: 15px;
    line-height: 1.6;
}

/* Editable */
[contenteditable="true"] {
    outline: 2px dashed #ffc107;
    padding: 4px;
}

/* Print */
@media print {
    .controls { display: none; }
}
</style>
</head>

<body>

<!-- ===== CONTROLS SAME PAGE ===== -->
<div class="controls">
    <button class="edit" onclick="enableEdit()">✏ Edit</button>
    <button class="save" onclick="saveData()">💾 Save</button>
    <button class="download" onclick="downloadPDF()">⬇ Download PDF</button>
</div>

<!-- ===== RESUME ===== -->
<div id="resume">

    <div class="header">
        <?php if($profilePicPath): ?>
        <div class="profile-pic">
            <img src="<?= $profilePicPath ?>">
        </div>
        <?php endif; ?>

        <h1 contenteditable="false"><?= htmlspecialchars($name) ?></h1>
        <p contenteditable="false"><?= htmlspecialchars($email) ?> | <?= htmlspecialchars($phone) ?></p>
        <p contenteditable="false"><?= htmlspecialchars($address) ?></p>
    </div>

    <div class="section">
        <h2>Professional Summary</h2>
        <div contenteditable="false"><?= nl2br(htmlspecialchars($summary)) ?></div>
    </div>

    <div class="section">
        <h2>Education</h2>
        <div contenteditable="false"><?= nl2br(htmlspecialchars($education)) ?></div>
    </div>

    <div class="section">
        <h2>Experience</h2>
        <div contenteditable="false"><?= nl2br(htmlspecialchars($experience)) ?></div>
    </div>

    <div class="section">
        <h2>Skills</h2>
        <div contenteditable="false"><?= nl2br(htmlspecialchars($skills)) ?></div>
    </div>

</div>

<script>
function enableEdit() {
    document.querySelectorAll('[contenteditable]').forEach(el => {
        el.setAttribute('contenteditable', 'true');
    });
}

function saveData() {
    document.querySelectorAll('[contenteditable]').forEach(el => {
        el.setAttribute('contenteditable', 'false');
    });
    alert("Resume saved successfully!");
}

function downloadPDF() {
    const element = document.getElementById("resume");

    html2pdf().set({
        margin: 0,
        filename: 'Resume.pdf',
        image: { type: 'jpeg', quality: 1 },
        html2canvas: {
            scale: 3,
            scrollY: 0,
            useCORS: true
        },
        jsPDF: {
            unit: 'mm',
            format: 'a4',
            orientation: 'portrait'
        }
    }).from(element).save();
}
</script>

</body>
</html>
