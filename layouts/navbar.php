<!-- NAVBAR -->
<div class="navbar">
    <div class="logo">
        <img src="images/ass-logo.png" alt="Logo">
        <h2>ASS Resume Builder</h2>
    </div>

    <div class="nav-links">
        <a href="dashboard.php">Home</a>
        <a href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Template</a>
        <a href="#">Support</a>
    </div>

    <div class="actions">
        <a class="btn login-btn" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>
        <a class="btn register-btn" href="#" data-bs-toggle="modal" data-bs-target="#registerModal">Register</a>
    </div>
</div>

<style>
/* NAVBAR MAIN AREA */
.navbar {
    width: 100%;
    padding: 12px 30px;
    display: flex;
    align-items: center;
    justify-content: space-between;

    background: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(10px);
    box-shadow: 0 4px 20px rgba(0,0,0,0.1);

    position: sticky;
    top: 0;
    z-index: 100;
    border-bottom: 1px solid rgba(255,255,255,0.3);
}

/* LOGO */
.logo {
    display: flex;
    align-items: center;
    gap: 12px;
}

.logo img {
    width: 45px;
    height: 45px;
}

.logo h2 {
    font-size: 22px;
    font-weight: 700;
    color: #222;
}

/* NAV LINKS */
.nav-links {
    display: flex;
    gap: 25px;
}

.nav-links a {
    text-decoration: none;
    color: #444;
    font-weight: 600;
    font-size: 16px;
    transition: 0.3s;
}

.nav-links a:hover {
    color: #007bff;
}

/* LOGIN REGISTER BUTTONS */
.actions {
    display: flex;
    gap: 15px;
}

.btn {
    padding: 8px 18px;
    border-radius: 30px;
    font-weight: 600;
    text-decoration: none;
    transition: 0.3s;
}

/* LOGIN BUTTON */
.login-btn {
    color: #007bff;
    border: 2px solid #007bff;
}
.login-btn:hover {
    background: #007bff;
    color: #fff;
}

/* REGISTER BUTTON */
.register-btn {
    background: linear-gradient(45deg, #ff6a00, #ee0979);
    color: #fff;
}
.register-btn:hover {
    opacity: 0.85;
}
</style>