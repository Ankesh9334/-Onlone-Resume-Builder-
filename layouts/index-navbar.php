<?php
$user = $_SESSION['user'] ?? 'User';
?>

<style>

.index-navbar{
    width:95%;
    background:#ffffff;
    padding:12px 30px;
    display:flex;
    justify-content:space-between; 
    align-items:center;
    box-shadow:0 4px 12px rgba(0,0,0,0.08);
    position:sticky;
    top:0;
    z-index:1000;
}

.nav-logo{
    display:flex;
    align-items:center;
    gap:10px;
    font-size:20px;
    font-weight:700;
    color:#222;
}

.nav-logo img{
    height:42px;
}

.nav-profile{
    position:relative;
    cursor:pointer;
    user-select:none;
}

.nav-profile span{
    font-size:15px;
    font-weight:600;
    margin-right:6px;
}

.profile-circle{
    width:38px;
    height:38px;
    border-radius:50%;
    background:#28a745;
    color:#fff;
    display:inline-flex;
    align-items:center;
    justify-content:center;
    font-weight:700;
}

.profile-dropdown{
    display:none;
    position:absolute;
    right:0;
    top:48px;
    background:#fff;
    width:190px;
    border-radius:10px;
    overflow:hidden;
    box-shadow:0 8px 20px rgba(0,0,0,0.2);
}

.profile-dropdown .user{
    padding:14px;
    font-weight:700;
    background:#f5f6fa;
    border-bottom:1px solid #eee;
}

.profile-dropdown a{
    display:block;
    padding:12px 14px;
    text-decoration:none;
    color:#333;
    font-size:14px;
}

.profile-dropdown a:hover{
    background:#f1f1f1;
}

.profile-dropdown .logout{
    color:#dc3545;
    font-weight:700;
}
</style>

<nav class="index-navbar">
    <div class="nav-logo">
        <img src="images/ass-logo.png" alt="ASS Logo">
        ASS Resume Builder
    </div>

    <div class="nav-profile" onclick="toggleProfileMenu()">
        <span><?= htmlspecialchars($user) ?></span>
        <div class="profile-circle"><?= strtoupper(substr($user,0,1)) ?></div>

        <div class="profile-dropdown" id="profileMenu">
            <div class="user"><?= htmlspecialchars($user) ?></div>
            <a href="#">My Profile</a>
            <a href="logout.php" class="logout">Logout</a>
        </div>
    </div>
</nav>

<script>
function toggleProfileMenu(){
    const menu = document.getElementById('profileMenu');
    menu.style.display = menu.style.display === 'block' ? 'none' : 'block';
}

window.addEventListener('click', function(e){
    if(!e.target.closest('.nav-profile')){
        const menu = document.getElementById('profileMenu');
        if(menu) menu.style.display = 'none';
    }
});
</script>
