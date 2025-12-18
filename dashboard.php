<!DOCTYPE html>
<html lang="en">

<?php include "layouts/head.php"; ?>

<style>

body{
    background: linear-gradient(135deg,#eef2ff,#f8fafc);
}

.main{
    animation: pageFade 0.9s ease forwards;
}

@keyframes pageFade{
    from{
        opacity:0;
        transform: translateY(30px);
    }
    to{
        opacity:1;
        transform: translateY(0);
    }
}

.welcome{
    text-align:center;
    margin-top:40px;
}
.welcome h1{
    font-weight:700;
    animation: slideDown 0.8s ease forwards;
}
.welcome p{
    color:#555;
    animation: fadeUp 1s ease forwards;
    animation-delay:.2s;
}

@keyframes slideDown{
    from{ opacity:0; transform: translateY(-20px); }
    to{ opacity:1; transform: translateY(0); }
}
@keyframes fadeUp{
    from{ opacity:0; transform: translateY(20px); }
    to{ opacity:1; transform: translateY(0); }
}

/* ================= TEMPLATE SECTION ================= */
.templates{
    display:flex;
    gap:25px;
    justify-content:center;
    flex-wrap:wrap;
    margin:40px auto;
}

/* TEMPLATE CARD */
.template-box{
    width:260px;
    background: rgba(255,255,255,0.75);
    border-radius:18px;
    padding:15px;
    text-align:center;
    backdrop-filter: blur(12px);
    border:1px solid rgba(255,255,255,0.4);
    box-shadow:0 10px 25px rgba(0,0,0,0.15);
    transition:0.35s ease;
    opacity:0;
    transform: translateY(40px) scale(0.95);
    animation: cardIn .8s ease forwards;
}

/* stagger animation */
.template-box:nth-child(1){ animation-delay:.1s; }
.template-box:nth-child(2){ animation-delay:.2s; }
.template-box:nth-child(3){ animation-delay:.3s; }
.template-box:nth-child(4){ animation-delay:.4s; }

@keyframes cardIn{
    to{
        opacity:1;
        transform: translateY(0) scale(1);
    }
}

.template-box:hover{
    transform: translateY(-10px) scale(1.02);
    box-shadow:0 20px 40px rgba(0,0,0,0.25);
}

/* TEMPLATE IMAGE */
.template-box img{
    width:100%;
    height:320px;
    object-fit:cover;
    border-radius:14px;
    box-shadow:0 6px 18px rgba(0,0,0,0.25);
    transition:.35s;
}
.template-box:hover img{
    transform: scale(1.04);
}

/* BUTTON */
.template-box a{
    margin-top:15px;
    display:inline-block;
    background: linear-gradient(135deg,#6a11cb,#2575fc);
    color:white;
    padding:10px 18px;
    border-radius:12px;
    text-decoration:none;
    font-weight:600;
    transition:.3s;
    position:relative;
    overflow:hidden;
}

.template-box a::after{
    content:'';
    position:absolute;
    inset:0;
    background:rgba(255,255,255,0.25);
    transform:scaleX(0);
    transform-origin:left;
    transition:.4s;
}
.template-box a:hover::after{
    transform:scaleX(1);
}

/* ================= MODAL ANIMATION ================= */
.modal.fade .modal-dialog{
    transform: perspective(1200px) translateZ(-200px) scale(0.7);
    opacity:0;
    transition:all .5s ease;
}
.modal.show .modal-dialog{
    transform: perspective(1200px) translateZ(0) scale(1);
    opacity:1;
}
</style>

<body>

<?php include "layouts/navbar.php"; ?>

<div class="main">

    <div class="welcome">
        <h1>Welcome to Online Resume Builder</h1>
        <p>Create professional resumes using modern templates</p>
    </div>

    <h2 class="text-center mt-5">Select Resume Template</h2>

    <div class="templates">

        <div class="template-box">
            <img src="images/T-1.png">
            <a href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Use Template</a>
        </div>

        <div class="template-box">
            <img src="images/T-2.png">
            <a href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Use Template</a>
        </div>

        <div class="template-box">
            <img src="images/T-3.png">
            <a href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Use Template</a>
        </div>

        <div class="template-box">
            <img src="images/T-4.png">
            <a href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Use Template</a>
        </div>

    </div>

</div>

<?php include "layouts/sidebar.php"; ?>
<?php include "layouts/footer.php"; ?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
