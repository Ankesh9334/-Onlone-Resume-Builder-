<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Resume Builder Dashboard</title>

<style>
/* ================= THEME ================= */
:root{
    --bg1:#eef2ff;
    --bg2:#f8fafc;
    --card:#ffffff;
    --text:#1f2937;
    --primary:#4c6ef5;
}
body.dark{
    --bg1:#0f172a;
    --bg2:#020617;
    --card:#1e293b;
    --text:#e5e7eb;
}

body{
    margin:0;
    font-family:'Segoe UI',sans-serif;
    background:linear-gradient(135deg,var(--bg1),var(--bg2));
    color:var(--text);
    transition:.4s;
}

/* ================= HEADER ================= */
.header{
    background:linear-gradient(135deg,#4c6ef5,#6d28d9);
    padding:20px 40px;
    color:#fff;
    display:flex;
    justify-content:space-between;
    align-items:center;
    box-shadow:0 8px 25px rgba(0,0,0,.25);
}
.logo-box{display:flex;align-items:center;gap:12px}
.logo-box img{
    width:46px;height:46px;border-radius:50%;
    box-shadow:0 4px 10px rgba(0,0,0,.3);
}

.header-right{display:flex;gap:15px;align-items:center}
.header a, .dark-btn{
    background:rgba(255,255,255,.18);
    padding:10px 22px;
    border-radius:30px;
    color:#fff;
    text-decoration:none;
    font-weight:600;
    backdrop-filter:blur(6px);
    border:none;
    cursor:pointer;
    transition:.3s;
}
.header a:hover,.dark-btn:hover{
    background:#fff;color:#4c6ef5;
}

/* ================= CONTAINER ================= */
.dashboard-container{
    max-width:1250px;
    margin:50px auto;
    padding:0 20px;
}

/* ================= TITLE ================= */
.section-title{
    text-align:center;
    font-size:30px;
    font-weight:800;
    margin-bottom:40px;
    animation:fadeDown .8s ease;
}
@keyframes fadeDown{
    from{opacity:0;transform:translateY(-20px);}
    to{opacity:1;}
}

/* ================= GRID ================= */
.resume-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(300px,1fr));
    gap:28px;
}

/* ================= CARD ================= */
.resume-card{
    background:var(--card);
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 10px 25px rgba(0,0,0,.15);
    transition:.35s;
    position:relative;
    animation:cardUp .8s ease forwards;
}
@keyframes cardUp{
    from{opacity:0;transform:translateY(30px) scale(.95);}
    to{opacity:1;}
}
.resume-card:hover{
    transform:translateY(-12px) scale(1.02);
    box-shadow:0 25px 50px rgba(0,0,0,.25);
}

/* BADGES */
.badge{
    position:absolute;
    top:15px;left:15px;
    background:linear-gradient(135deg,#22c55e,#16a34a);
    color:#fff;
    padding:6px 14px;
    font-size:12px;
    border-radius:20px;
    font-weight:700;
}
.lock{
    position:absolute;
    top:15px;right:15px;
    background:#ef4444;
    color:#fff;
    padding:6px 14px;
    border-radius:20px;
    font-size:12px;
    animation:pulse 1.4s infinite;
}
@keyframes pulse{50%{transform:scale(1.1)}}

/* IMAGE */
.resume-card img{
    width:100%;
    height:460px;
    object-fit:cover;
    transition:.4s;
}
.resume-card:hover img{transform:scale(1.06)}

/* INFO */
.resume-info{padding:20px}
.resume-info h3{margin:0;font-size:19px;color:var(--primary)}
.resume-info p{font-size:14px;margin-top:8px;line-height:1.6}

/* BUTTON */
.btn-use{
    display:inline-block;
    margin-top:14px;
    padding:11px 26px;
    background:linear-gradient(135deg,#4c6ef5,#7c3aed);
    color:#fff;
    text-decoration:none;
    border-radius:30px;
    font-size:14px;
    font-weight:600;
    transition:.3s;
}
.btn-use:hover{
    background:linear-gradient(135deg,#4338ca,#6d28d9);
    transform:scale(1.05);
}

/* ================= MODAL ================= */
.modal{
    position:fixed;inset:0;
    background:rgba(0,0,0,.5);
    display:none;
    align-items:center;
    justify-content:center;
}
.modal.show{display:flex}
.modal-box{
    background:#fff;
    padding:30px;
    border-radius:18px;
    width:320px;
    animation:pop .4s ease;
}
@keyframes pop{from{transform:scale(.8);opacity:0}to{opacity:1}}
.modal-box input{
    width:100%;
    padding:10px;
    margin-bottom:12px;
}
.modal-box button{
    width:100%;
    padding:10px;
    background:#4c6ef5;
    color:#fff;border:none;border-radius:8px;
}

/* ================= RESPONSIVE ================= */
@media(max-width:600px){
    .header h1{font-size:20px}
    .section-title{font-size:24px}
}
</style>
</head>

<body>

<!-- HEADER -->
<div class="header">
    <div class="logo-box">
        <img src="images/ass-logo.png">
        <h1>Resume Builder Dashboard</h1>
    </div>
    <div class="header-right">
        <button class="dark-btn" onclick="toggleDark()">🌙</button>
        <a href="#" onclick="openLogin()">Login</a>
    </div>
</div>

<!-- CONTENT -->
<div class="dashboard-container">
    <h2 class="section-title">Choose Your Resume Template</h2>

    <div class="resume-grid">

        <div class="resume-card">
            <span class="badge">POPULAR</span>
            <span class="lock">PREMIUM</span>
            <img src="images/T-5.png">
            <div class="resume-info">
                <h3>Modern Blue</h3>
                <p>Perfect for IT & corporate professionals.</p>
                <a href="#" class="btn-use">Unlock ₹4</a>
            </div>
        </div>

        <div class="resume-card">
            <span class="badge">NEW</span>
            <img src="images/T-1.png">
            <div class="resume-info">
                <h3>Simple Professional</h3>
                <p>Best choice for freshers & students.</p>
                <a href="#" class="btn-use">Use Free</a>
            </div>
        </div>

        <div class="resume-card">
            <span class="lock">PREMIUM</span>
            <img src="images/T-3.png">
            <div class="resume-info">
                <h3>Elegant Gray</h3>
                <p>Minimal & clean layout for all industries.</p>
                <a href="#" class="btn-use">Unlock ₹4</a>
            </div>
        </div>

        <div class="resume-card">
            <span class="badge">TRENDING</span>
            <img src="images/T-4.png">
            <div class="resume-info">
                <h3>Creative Layout</h3>
                <p>Ideal for designers & freelancers.</p>
                <a href="#" class="btn-use">Use Free</a>
            </div>
        </div>

    </div>
</div>

<!-- LOGIN MODAL -->
<div class="modal" id="loginModal">
    <div class="modal-box">
        <h3>Login</h3>
        <input placeholder="Email">
        <input type="password" placeholder="Password">
        <button>Login</button>
    </div>
</div>

<script>
function toggleDark(){
    document.body.classList.toggle('dark');
}
function openLogin(){
    document.getElementById('loginModal').classList.add('show');
}
document.getElementById('loginModal').onclick=e=>{
    if(e.target.id==='loginModal') e.target.classList.remove('show');
}
</script>

</body>
</html>
