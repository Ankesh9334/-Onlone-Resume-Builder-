<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ASS Resume Builder</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    margin:0;
    font-family:'Segoe UI',sans-serif;
    background:linear-gradient(135deg,#eef2ff,#f8fafc);
}

/* ================= CUSTOM NAVBAR ================= */
.custom-navbar{
    width:100%;
    padding:12px 30px;
    display:flex;
    align-items:center;
    justify-content:space-between;

    background:rgba(255,255,255,0.2);
    backdrop-filter:blur(10px);
    box-shadow:0 4px 20px rgba(0,0,0,0.1);

    position:sticky;
    top:0;
    z-index:100;
    border-bottom:1px solid rgba(255,255,255,0.3);
}

/* LOGO */
.logo{
    display:flex;
    align-items:center;
    gap:12px;
}
.logo img{
    width:45px;
    height:45px;
}
.logo h2{
    font-size:22px;
    font-weight:700;
    color:#222;
}

/* NAV LINKS */
.nav-links{
    display:flex;
    gap:25px;
}
.nav-links a{
    text-decoration:none;
    color:#444;
    font-weight:600;
    font-size:16px;
}
.nav-links a:hover{
    color:#007bff;
}

/* BUTTONS */
.actions{
    display:flex;
    gap:15px;
}
.btn-custom{
    padding:8px 18px;
    border-radius:30px;
    font-weight:600;
    text-decoration:none;
    cursor:pointer;
}

/* LOGIN */
.login-btn{
    color:#007bff;
    border:2px solid #007bff;
    background:none;
}
.login-btn:hover{
    background:#007bff;
    color:#fff;
}

/* REGISTER */
.register-btn{
    background:linear-gradient(45deg,#ff6a00,#ee0979);
    color:#fff;
    border:none;
}
.register-btn:hover{
    opacity:.85;
}


/* ================= MODAL ANIMATION ================= */
.modal.fade .modal-dialog{
    transform:scale(.75);
    opacity:0;
    transition:.35s ease;
}
.modal.show .modal-dialog{
    transform:scale(1);
    opacity:1;
}
</style>
</head>

<body>

<!-- ================= NAVBAR ================= -->
<div class="custom-navbar">
    <div class="logo">
        <img src="images/ass-logo.png">
        <h2>ASS Resume Builder</h2>
    </div>

    <div class="nav-links">
        <a href="dashboard.php">Home</a>
        <a href="login.php" data-bs-toggle="modal" data-bs-target="#loginModal">Template</a>
        <a href="#">Support</a>
    </div>

    <div class="actions">
        <button class="btn-custom login-btn" data-bs-toggle="modal" data-bs-target="#loginModal">
            Login
        </button>
        <button class="btn-custom register-btn" data-bs-toggle="modal" data-bs-target="#registerModal">
            Register
        </button>
    </div>
</div>


<?php include "register.php"; ?>
<?php include "login.php"; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
