<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Professional Resume</title>

<!-- html2pdf -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>

<style>
*{
    box-sizing:border-box;
    -webkit-print-color-adjust:exact !important;
    print-color-adjust:exact !important;
}

body{
    margin:0;
    background:#e5e7eb;
    font-family:Arial, Helvetica, sans-serif;
}

/* ===== A4 SIZE (PX SAFE) ===== */
#resume{
    width:794px;
    height:1123px;
    margin:20px auto;
    background:#ffffff;
    display:flex;
}

/* ===== LEFT PANEL ===== */
.left{
    width:32%;
    background:#2f2f2f;
    color:#ffffff;
    padding:28px;
}

/* IMAGE SAFE */
.photo{
    width:140px;
    height:140px;
    margin:auto;
    border-radius:50%;
    background:#fff;
    padding:4px;
    border:4px solid #facc15;
}
.photo img{
    width:100%;
    height:100%;
    border-radius:50%;
    object-fit:cover;
    display:block;
}

.left h3{
    margin-top:28px;
    font-size:16px;
    letter-spacing:1px;
}

.info p{
    font-size:13px;
    line-height:1.5;
}

/* SKILLS */
.skill{
    height:4px;
    background:#555;
    margin:6px 0 14px;
}
.skill span{
    display:block;
    height:100%;
    background:#facc15;
}

/* ===== RIGHT PANEL ===== */
.right{
    width:68%;
    padding:36px;
}

.name{
    font-size:36px;
    font-weight:bold;
}

.role{
    font-size:18px;
    margin-bottom:20px;
}

.yellow-line{
    height:3px;
    width:60px;
    background:#facc15;
    margin:10px 0 18px;
}

.section{
    margin-bottom:26px;
}

.section h3{
    font-size:18px;
    margin-bottom:6px;
}

.section ul{
    padding-left:18px;
}

.section li{
    font-size:14px;
    line-height:1.6;
}

/* ===== EDIT MODE ===== */
[contenteditable="true"]{
    outline:2px dashed #facc15;
    background:#fffbe6;
}

/* ===== CONTROLS ===== */
.controls{
    width:794px;
    margin:10px auto 40px;
    background:#fff;
    padding:14px;
    border-radius:10px;
    text-align:center;
}
.controls button{
    padding:10px 18px;
    margin:0 6px;
    border:none;
    border-radius:8px;
    cursor:pointer;
    font-size:14px;
}
.edit{background:#fde047}
.save{background:#22c55e;color:#fff}
.pdf{background:#2563eb;color:#fff}

@media print{
    body{background:#fff}
    .controls{display:none}
}
</style>
</head>

<body>

<!-- ===== RESUME ===== -->
<div id="resume">

    <!-- LEFT -->
    <div class="left">
        <div class="photo">
            <img id="img" src="https://via.placeholder.com/300">
        </div>

        <input type="file" accept="image/*" onchange="upload(event)" style="margin:12px 0;color:#fff">

        <h3>PERSONAL INFO</h3>
        <div class="info" contenteditable="false">
            <p><b>Address</b><br>New Delhi, India</p>
            <p><b>Phone</b><br>9876543210</p>
            <p><b>Email</b><br>email@gmail.com</p>
            <p><b>LinkedIn</b><br>linkedin.com/username</p>
        </div>

        <h3>SKILLS</h3>
        <p>Classroom Management</p>
        <div class="skill"><span style="width:90%"></span></div>

        <p>Student Motivation</p>
        <div class="skill"><span style="width:85%"></span></div>

        <p>Curriculum Development</p>
        <div class="skill"><span style="width:80%"></span></div>

        <h3>LANGUAGES</h3>
        <p>Hindi</p>
        <div class="skill"><span style="width:95%"></span></div>

        <p>English</p>
        <div class="skill"><span style="width:90%"></span></div>
    </div>

    <!-- RIGHT -->
    <div class="right">
        <div class="name" contenteditable="false">AYESHA AHUJA</div>
        <div class="role" contenteditable="false">PGT Maths, MSc & B.Ed</div>

        <div class="yellow-line"></div>

        <p contenteditable="false">
            Organised and meticulous Math teacher with strong academic
            and classroom experience. Focused on student-centred learning
            and modern teaching techniques.
        </p>

        <div class="section">
            <h3>EMPLOYMENT HISTORY</h3>
            <ul contenteditable="false">
                <li><b>Maths Teacher (2019–2022)</b> – Ahlcon International School</li>
                <li>Innovative lesson planning</li>
                <li>Student performance improvement</li>
            </ul>
        </div>

        <div class="section">
            <h3>EDUCATION</h3>
            <ul contenteditable="false">
                <li>B.Ed – Jamia Millia Islamia</li>
                <li>MSc Mathematics – University of Delhi</li>
            </ul>
        </div>
    </div>

</div>

<!-- ===== CONTROLS ===== -->
<div class="controls">
    <button class="edit" onclick="edit()">✏ Edit</button>
    <button class="save" onclick="save()">💾 Save</button>
    <button class="pdf" onclick="downloadPDF()">⬇ Download PDF</button>
</div>

<script>
function edit(){
    document.querySelectorAll('[contenteditable]').forEach(el=>{
        el.contentEditable = true;
    });
}

function save(){
    document.querySelectorAll('[contenteditable]').forEach(el=>{
        el.contentEditable = false;
    });
    alert("Saved Successfully ✔");
}

function upload(event){
    const reader = new FileReader();
    reader.onload = function(){
        document.getElementById("img").src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
}

function downloadPDF(){
    const element = document.getElementById("resume");

    html2pdf().set({
        filename: "Professional_Resume.pdf",
        html2canvas:{
            scale:3,
            useCORS:true,
            scrollY:0
        },
        jsPDF:{
            unit:"px",
            format:[794,1123],
            orientation:"portrait"
        }
    }).from(element).save();
}
</script>

</body>
</html>
