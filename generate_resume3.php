<?php
// Safe variables
$name       = $_POST['name']       ?? '';
$email      = $_POST['email']      ?? '';
$phone      = $_POST['phone']      ?? '';
$address    = $_POST['address']    ?? '';
$summary    = $_POST['summary']    ?? '';
$education  = $_POST['education']  ?? '';
$experience = $_POST['experience'] ?? '';
$skills     = $_POST['skills']     ?? '';

// Profile picture upload
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

<style>
    body { font-family: Arial, sans-serif; background: linear-gradient(135deg, #1f1c2c, #928dab); margin:0; padding:0; }

    .resume-container {
        width: 850px;
        margin: 40px auto;
        background: #222;
        border-radius: 20px;
        padding: 40px;
        color: #fff;
        box-shadow: 0 10px 40px rgba(0,0,0,0.4);
    }

    .header {
        text-align: center;
        background: linear-gradient(135deg, #6a11cb, #2575fc);
        padding: 35px;
        border-radius: 15px;
        margin-bottom: 30px;
    }

    .profile-pic {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        overflow: hidden;
        border: 4px solid #fff;
        margin: 0 auto 15px auto;
    }

    .profile-pic img { width: 100%; height: 100%; object-fit: cover; }

    .header h1 { margin:0; font-size: 32px; letter-spacing: 1px; }
    .info-line { margin-top: 8px; font-size: 16px; opacity: 0.9; }

    .section {
        margin-bottom: 30px;
        background: #333;
        padding: 20px;
        border-left: 6px solid gold;
        border-radius: 12px;
    }

    .section h2 { margin-top:0; color: gold; font-size: 22px; }

    .section p { font-size: 16px; line-height: 1.6; color:#eee; }

    /* Buttons */
    .download-btn, .pay-btn, .close-btn {
        padding: 14px 20px;
        border: none;
        cursor: pointer;
        font-size: 17px;
        border-radius: 8px;
        margin-top: 20px;
        display: inline-block;
    }

    .download-btn {
        background: gold;
        color: #000;
        font-weight: bold;
    }

    .download-btn:hover { background: #ffdd55; }

    /* PREMIUM POPUP */
    .popup-overlay {
        display: none;
        position: fixed;
        top:0; left:0;
        width:100%; height:100%;
        background: rgba(0,0,0,0.6);
        justify-content: center;
        align-items: center;
        z-index: 999;
    }

    .popup-box {
        width: 370px;
        background: #fff;
        color: #000;
        padding: 25px;
        border-radius: 12px;
        text-align: center;
        animation: zoomIn 0.35s ease;
    }

    @keyframes zoomIn {
        from { transform: scale(0.5); opacity:0; }
        to   { transform: scale(1); opacity:1; }
    }

    .pay-btn {
        width: 100%;
        background: #2575fc;
        color: white;
        margin-top: 12px;
    }

    .close-btn {
        margin-top: 12px;
        width: 100%;
        background: #333;
        color: #fff;
    }

    .price {
        font-size: 24px;
        color: #2575fc;
        font-weight: bold;
    }
</style>

</head>
<body>

<div class="resume-container">

    <div class="header">
        <?php if($profilePicPath): ?>
        <div class="profile-pic">
            <img src="<?= $profilePicPath ?>">
        </div>
        <?php endif; ?>

        <h1><?= htmlspecialchars($name); ?></h1>
        <div class="info-line"><?= htmlspecialchars($email); ?> | <?= htmlspecialchars($phone); ?></div>
        <div class="info-line"><?= htmlspecialchars($address); ?></div>
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

    <!-- DOWNLOAD BUTTON -->
    <button class="download-btn" onclick="showPremiumPopup()">
        ⬇ Download PDF
    </button>

</div>


<!-- PREMIUM POPUP -->
<div id="premiumPopup" class="popup-overlay">
    <div class="popup-box">
        <h2>🔒 Premium Feature</h2>
        <p>Resume download is a paid feature.</p>
        <p class="price">₹4 Only</p>

<button class="pay-btn" onclick="payUPI()">Pay Now</button>
        <button class="close-btn" onclick="closePopup()">Cancel</button>
    </div>
</div>


<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<script>
function startPayment() {
    var options = {
        "key": "rzp_test_xxxxxxxxx", 
        "amount": 400, // ₹4 = 400 paise
        "currency": "INR",
        "name": "Resume Download",
        "description": "Premium Resume Download",
        "handler": function (response){
            // Payment Success
            downloadPDF();   // Automatically resume download
            closePopup();
        }
    };
    
    var rzp1 = new Razorpay(options);
    rzp1.open();
}
</script>



</body>
</html>
