<?php
// Safe variables with default fallback
$name       = !empty($_POST['name'])       ? $_POST['name']       : "Not Provided";
$email      = !empty($_POST['email'])      ? $_POST['email']      : "Not Provided";
$phone      = !empty($_POST['phone'])      ? $_POST['phone']      : "Not Provided";
$address    = !empty($_POST['address'])    ? $_POST['address']    : "Not Provided";
$summary    = !empty($_POST['summary'])    ? $_POST['summary']    : "Not Provided";
$education  = !empty($_POST['education'])  ? $_POST['education']  : "Not Provided";
$experience = !empty($_POST['experience']) ? $_POST['experience'] : "Not Provided";
$skills     = !empty($_POST['skills'])     ? $_POST['skills']     : "Not Provided";

// Profile Picture Upload
$profilePicPath = "";
if (!empty($_FILES['profile_picture']['name'])) {
    $uploadDir = "uploads/";
    if (!is_dir($uploadDir)) { mkdir($uploadDir, 0777, true); }

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
    <title>Premium Resume Output</title>

    <!-- PDF Library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>

<style>
    body {
        font-family: Arial, sans-serif;
        background: #f3f4f7;
        margin: 0;
        padding: 0;
    }

    #resumeArea {
        padding: 20px;
    }

    .resume-container {
        width: 800px;
        margin: 20px auto;
        background: #ffffff;
        border-radius: 20px;
        padding: 40px;
        box-shadow: 0 10px 40px rgba(0,0,0,0.20);
    }

    .header {
        text-align: center;
        background: linear-gradient(135deg, #6a11cb, #2575fc);
        padding: 35px;
        border-radius: 15px;
        color: white;
        margin-bottom: 30px;
    }

    .profile-pic {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        overflow: hidden;
        border: 5px solid #fff;
        margin: 0 auto 15px auto;
    }

    .profile-pic img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .section {
        margin-bottom: 30px;
        padding: 20px;
        border-left: 6px solid #6a11cb;
        background: #f4f6ff;
        border-radius: 12px;
        page-break-inside: avoid;
    }

    .section h2 {
        margin-top: 0;
        color: #6a11cb;
    }

    .download-btn {
        width: 250px;
        display: block;
        margin: 25px auto;
        padding: 15px;
        background: #2575fc;
        color: white;
        border: none;
        font-size: 18px;
        border-radius: 12px;
        cursor: pointer;
        transition: .3s;
    }

    .download-btn:hover {
        background: #0b56d0;
    }
</style>

<script>
function downloadPDF() {
    const element = document.getElementById("resumeArea");

    html2pdf()
        .set({
            margin: 10,
            filename: 'Resume.pdf',
            html2canvas: { scale: 3, useCORS: true },
            jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' }
        })
        .from(element)
        .save();
}
</script>

</head>
<body>

<div id="resumeArea">
    <div class="resume-container">

        <div class="header">
            
            <?php if ($profilePicPath): ?>
                <div class="profile-pic">
                    <img src="<?= $profilePicPath ?>" alt="Profile Picture">
                </div>
            <?php endif; ?>

            <h1><?= htmlspecialchars($name); ?></h1>
            <div><?= htmlspecialchars($email); ?> | <?= htmlspecialchars($phone); ?></div>
            <div><?= htmlspecialchars($address); ?></div>
        </div>

        <div class="section">
            <h2>Profile Summary</h2>
            <p><?= nl2br(htmlspecialchars($summary)); ?></p>
        </div>

        <div class="section">
            <h2>Education</h2>
            <p><?= nl2br(htmlspecialchars($education)); ?></p>
        </div>

        <div class="section">
            <h2>Experience</h2>
            <p><?= nl2br(htmlspecialchars($experience)); ?></p>
        </div>

        <div class="section">
            <h2>Skills</h2>
            <p><?= nl2br(htmlspecialchars($skills)); ?></p>
        </div>

    </div>
</div>

<button class="download-btn" onclick="downloadPDF()">⬇ Download PDF</button>

</body>
</html>
