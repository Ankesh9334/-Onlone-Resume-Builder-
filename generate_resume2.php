<?php
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
    if (!is_dir($uploadDir)) mkdir($uploadDir, 0777, true);
    $fileName = time() . "_" . $_FILES['profile_picture']['name'];
    if (move_uploaded_file($_FILES['profile_picture']['tmp_name'], $uploadDir.$fileName)) {
        $profilePicPath = $uploadDir.$fileName;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Resume Preview</title>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>

<style>
*{
    box-sizing:border-box;
    -webkit-print-color-adjust:exact;
    print-color-adjust:exact;
}

body{
    margin:0;
    background:#f1f5f9;
    font-family:Arial, sans-serif;
}

/* ===== CONTROLS ===== */
.controls{
    text-align:center;
    padding:15px;
    background:#111;
}
.controls button{
    padding:10px 18px;
    font-size:15px;
    border:none;
    border-radius:6px;
    margin:0 6px;
    cursor:pointer;
    font-weight:bold;
}
.edit{background:#facc15}
.save{background:#22c55e;color:#fff}
.download{background:#2563eb;color:#fff}

/* ===== RESUME ===== */
#resume{
    width:210mm;
    min-height:297mm;
    margin:0 auto;
    padding:20mm;
    background:#ffffff;   /* ✅ WHITE BACKGROUND */
    color:#000000;        /* ✅ BLACK TEXT */
}

/* HEADER */
.header{
    text-align:center;
    margin-bottom:20px;
}
.profile-pic{
    width:120px;
    height:120px;
    margin:0 auto 10px;
    border-radius:50%;
    overflow:hidden;
    border:4px solid #2563eb;
}
.profile-pic img{
    width:100%;
    height:100%;
    object-fit:cover;
}
.header h1{
    margin:6px 0;
    font-size:30px;
}
.header p{
    margin:3px 0;
    font-size:14px;
}

/* SECTION */
.section{
    margin-bottom:18px;
}
.section h2{
    font-size:18px;
    color:#2563eb;
    border-bottom:2px solid #2563eb;
    padding-bottom:4px;
    margin-bottom:6px;
}
.section div{
    font-size:14px;
    line-height:1.6;
}

/* EDIT */
[contenteditable=true]{
    outline:2px dashed #2563eb;
    background:#f8fafc;
}

/* PRINT */
@media print{
    body{background:#fff}
    .controls{display:none}
}
</style>
</head>

<body>

<div class="controls">
    <button class="edit" onclick="enableEdit()">✏ Edit</button>
    <button class="save" onclick="saveData()">💾 Save</button>
    <button class="download" onclick="downloadPDF()">⬇ Download PDF</button>
</div>

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
function enableEdit(){
    document.querySelectorAll('[contenteditable]').forEach(el=>el.contentEditable=true);
}
function saveData(){
    document.querySelectorAll('[contenteditable]').forEach(el=>el.contentEditable=false);
    alert("Saved ✔");
}
function downloadPDF(){
    html2pdf().set({
        filename:"Resume.pdf",
        html2canvas:{
            scale:3,
            useCORS:true,
            scrollY:0,
            backgroundColor:"#ffffff" 
        },
        jsPDF:{
            unit:"mm",
            format:"a4",
            orientation:"portrait"
        }
    }).from(document.getElementById("resume")).save();
}
</script>

</body>
</html>
