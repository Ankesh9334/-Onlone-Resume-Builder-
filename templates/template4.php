<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Editable Resume</title>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>

<style>
*{
    box-sizing:border-box;
}

body{
    margin:0;
    padding:0;
    background:#eef1f6;
    font-family: Arial, sans-serif;
}

/* RESUME */
#resume{
    width:210mm;
    min-height:297mm;
    margin:20px auto;
    display:flex;
    background:#fff;
}

/* LEFT PANEL */
.left{
    width:32%;
    background:linear-gradient(180deg,#1e5799,#207cca);
    color:#fff;
    padding:30px;
}

.profile-pic{
    width:120px;
    height:120px;
    border-radius:50%;
    overflow:hidden;
    margin:auto;
    border:4px solid #fff;
}

.profile-pic img{
    width:100%;
    height:100%;
    object-fit:cover;
}

.upload{
    text-align:center;
    margin-top:8px;
}
.upload input{ display:none; }
.upload label{
    cursor:pointer;
    font-size:14px;
    text-decoration:underline;
}

.left h2{
    text-align:center;
    margin:15px 0 5px;
}
.role{
    text-align:center;
    opacity:.9;
}

.section-left{
    margin-top:25px;
}
.section-left h3{
    border-bottom:1px solid rgba(255,255,255,.4);
    padding-bottom:5px;
}
.section-left p, .section-left li{
    font-size:14px;
}

/* RIGHT PANEL */
.right{
    width:68%;
    padding:30px;
}

.section{
    margin-bottom:22px;
}
.section h3{
    color:#1e5799;
    border-bottom:2px solid #ddd;
    padding-bottom:5px;
}

/* EDIT MODE */
[contenteditable="true"]{
    outline:2px dashed #2575fc;
    padding:4px;
}

/* CONTROLS (SAME PAGE) */
.controls{
    width:210mm;
    margin:10px auto 40px;
    text-align:center;
    background:#fff;
    padding:15px;
    border-radius:12px;
    box-shadow:0 8px 25px rgba(0,0,0,.25);
}

.controls button{
    padding:10px 18px;
    border:none;
    border-radius:8px;
    font-size:15px;
    cursor:pointer;
    margin:0 5px;
}

.edit{ background:#ffc107; }
.save{ background:#28a745; color:#fff; }
.download{ background:#2575fc; color:#fff; }

/* PDF CLEAN */
@media print{
    body{ background:#fff; }
    .controls{ display:none !important; }
}
</style>
</head>

<body>

<!-- RESUME -->
<div id="resume">

    <!-- LEFT -->
    <div class="left">
        <div class="profile-pic">
            <img id="profileImage" src="https://via.placeholder.com/150">
        </div>

        <div class="upload">
            <label>
                Change Photo
                <input type="file" accept="image/*" onchange="uploadImage(event)">
            </label>
        </div>

        <h2 contenteditable="false">Anbhi kumar</h2>
        <div class="role" contenteditable="false">Software Engineer</div>

        <div class="section-left">
            <h3>Contact</h3>
            <p contenteditable="false">📞 987654312</p>
            <p contenteditable="false">✉ Email@gmail.com</p>
            <p contenteditable="false">📍 meerut</p>
        </div>

        <div class="section-left">
            <h3>Skills</h3>
            <ul>
                <li contenteditable="false">HTML</li>
                <li contenteditable="false">JavaScript </li>
                <li contenteditable="false">CSS </li>
                <li contenteditable="false">Laravel</li>
            </ul>
        </div>

        <div class="section-left">
            <h3>Education</h3>
            <p contenteditable="false">Your Bachelor of Technology (B.Tech)<br>2022 – 2026</p>
        </div>
    </div>

    <!-- RIGHT -->
    <div class="right">
        <div class="section">
            <h3>Profile</h3>
            <p contenteditable="false">
                Write your professional summary here.
            </p>
        </div>

        <div class="section">
            <h3>Experience</h3>
            <p contenteditable="false">
                <b>Job Title</b> – Company Name<br>
                • Responsibility one<br>
                • Responsibility two
            </p>
        </div>

        <div class="section">
            <h3>Achievements</h3>
            <p contenteditable="false">
                • Achievement one<br>
                • Achievement two
            </p>
        </div>
    </div>
</div>

<!-- CONTROLS (SAME PAGE, NOT FIXED) -->
<div class="controls">
    <button class="edit" onclick="enableEdit()">✏ Edit</button>
    <button class="save" onclick="saveData()">💾 Save</button>
    <button class="download" onclick="downloadPDF()">⬇ Download PDF</button>
</div>

<script>
function enableEdit(){
    document.querySelectorAll('[contenteditable]').forEach(el=>{
        el.contentEditable = "true";
    });
}

function saveData(){
    document.querySelectorAll('[contenteditable]').forEach(el=>{
        el.contentEditable = "false";
    });
    alert("Resume Saved ✔");
}

function uploadImage(e){
    const reader = new FileReader();
    reader.onload = () => {
        document.getElementById("profileImage").src = reader.result;
    };
    reader.readAsDataURL(e.target.files[0]);
}

function downloadPDF(){
    const resume = document.getElementById("resume");

    html2pdf(resume,{
        margin:[0,0,0,0],
        filename:'My_Resume.pdf',
        image:{type:'jpeg',quality:1},
        html2canvas:{scale:2,scrollY:0},
        jsPDF:{unit:'mm',format:'a4',orientation:'portrait'}
    });
}
</script>

</body>
</html>
