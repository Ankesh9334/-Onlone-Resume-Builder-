<!DOCTYPE html>
<html lang="en">
<?php include "layouts/head.php"; ?>

<body>

<?php include "layouts/scripts.php"; ?>

<?php include "layouts/navbar.php"; ?>


<!-- MAIN DASHBOARD -->
<div class="main">

    <div class="welcome">
        <h1>Welcome to Online Resume Builder</h1>
        <p>Create professional resumes using modern templates.</p>
    </div>

    <h2 class="templates-title">Select Resume Template</h2>

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
<style>
/* TEMPLATE SECTION */
.templates {
    display: flex;
    gap: 25px;
    justify-content: center;
    flex-wrap: wrap;
    margin-top: 30px;
}

/* TEMPLATE CARD */
.template-box {
    width: 260px;
    background: rgba(255,255,255,0.12);
    border-radius: 18px;
    padding: 15px;
    text-align: center;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255,255,255,0.25);
    box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    transition: 0.3s ease-in-out;
}

/* Hover Effect */
.template-box:hover {
    transform: translateY(-8px);
    box-shadow: 0 18px 35px rgba(0,0,0,0.25);
}

/* Template Image */
.template-box img {
    width: 100%;
    height: 320px;
    object-fit: cover;
    border-radius: 12px;
    box-shadow: 0 4px 18px rgba(0,0,0,0.25);
    transition: 0.3s;
}
.template-box img:hover {
    transform: scale(1.03);
}

/* BUTTON */
.template-box a {
    margin-top: 15px;
    display: inline-block;
    background: linear-gradient(135deg, #6a11cb, #2575fc);
    color: white;
    padding: 10px 16px;
    border-radius: 12px;
    text-decoration: none;
    font-weight: bold;
    transition: 0.3s;
    box-shadow: 0 4px 18px rgba(0,0,0,0.25);
}

.template-box a:hover {
    background: linear-gradient(135deg, #7e2eff, #3c8bff);
    transform: scale(1.05);
}
</style>

<?php include "layouts/sidebar.php"; ?>


<?php include "layouts/footer.php"; ?>




<?php include "login.php"; ?>

<?php include "register.php"; ?>



<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
