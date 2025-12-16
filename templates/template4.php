<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Premium Resume Builder — Template 5</title>

  <!-- html2pdf -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>

  <style>
    :root{
      --accent:#0066ff;
      --accent-soft:#e9f1ff;
      --muted:#6b7280;
      --bg:#eef2f7;
      --paper:#ffffff;
      --radius:14px;
      --max-width:880px;
      --shadow:0 10px 30px rgba(0,0,0,0.08);
      font-family: Inter,Arial;
    }

    body{
      background:var(--bg);
      margin:0;
      padding:32px;
      display:flex;
      justify-content:center;
    }

    /* Toolbar */
    .toolbar{
      width:100%;
      max-width:var(--max-width);
      display:flex;
      justify-content:space-between;
      align-items:center;
      margin-bottom:18px;
    }

    .btn{
      padding:10px 16px;
      border-radius:10px;
      border:0;
      cursor:pointer;
      font-weight:600;
      transition:.15s;
    }
    .btn:hover{transform:scale(.97)}

    .btn-download{background:var(--accent); color:#fff}
    .btn-secondary{background:#fff; color:#111; border:1px solid #d0d7e2}
    .btn-edit{background:#10b981; color:#fff}

    /* Resume Box */
    .container{
      width:100%;
      max-width:var(--max-width);
      background:var(--paper);
      border-radius:var(--radius);
      box-shadow:var(--shadow);
      padding:28px;
    }

    /* Grid Layout */
    .resume{
      display:grid;
      grid-template-columns: 1fr 320px;
      gap:22px;
    }

    .name{font-size:34px;font-weight:800;color:#111}
    .title{color:var(--muted);margin-top:4px}

    .section h3{
      margin:0 0 8px 0;
      font-size:15px;
      color:var(--accent);
      letter-spacing:.6px;
    }

    .card{
      background:#f9fbff;
      padding:14px;
      border-radius:12px;
      box-shadow: inset 0 0 0 1px #dce6f7;
    }

    .photo{text-align:right}
    .avatar{
      width:120px;
      height:120px;
      border-radius:16px;
      object-fit:cover;
      box-shadow:0 4px 12px rgba(0,0,0,0.15);
    }

    .skill-list{display:flex; flex-wrap:wrap; gap:8px}
    .skill{
      padding:6px 10px;
      background:var(--accent-soft);
      border-radius:20px;
      font-weight:600;
      font-size:13px;
    }

    @media(max-width:850px){
      .resume{grid-template-columns:1fr}
      .photo{text-align:left;margin-top:12px}
    }

    /* PREMIUM POPUP */
    #premiumPopup{
      position:fixed;
      top:0;left:0;
      width:100%;height:100%;
      background:rgba(0,0,0,.7);
      display:none;
      justify-content:center;
      align-items:center;
      z-index:99999;
    }
    .premium-box{
      background:#1e1e1e;
      padding:30px;
      border-radius:18px;
      width:360px;
      color:#fff;
      text-align:center;
      animation:zoom .3s ease;
      box-shadow:0 0 30px rgba(0,0,0,0.35);
    }
    @keyframes zoom{
      from{transform:scale(.5);opacity:0}
      to{transform:scale(1);opacity:1}
    }
    .pay-btn{
      width:100%;padding:12px;
      background:gold;
      border-radius:10px;border:none;
      font-weight:bold;
      cursor:pointer;font-size:17px;
      color:#000;
    }
    .close-btn{
      width:100%;padding:12px;
      background:#444;color:#fff;
      border-radius:10px;border:none;
      margin-top:10px;
      cursor:pointer;font-size:16px;
    }

.card {
    background: #ffffff !important;
    padding: 12px;
    border-radius: 10px;
    overflow: visible !important;
    border: 1px solid #ddd;
    margin-top: 10px;
}
.section h3 {
    color: #6a11cb;
    margin-bottom: 8px;
}


  </style>
</head>
<body>

  <!-- Toolbar -->
  <div class="toolbar">
    <div style="display:flex; gap:8px">
      <button class="btn btn-download" onclick="openPremium()">Download PDF</button>
      <button class="btn btn-edit" id="toggleEdit">Enable Edit</button>
    </div>

    <div style="display:flex; gap:8px; align-items:center">
      <label style="font-size:13px;color:var(--muted)">Filename:</label>
      <input id="pdfFilename" value="Premium_Resume.pdf"
        style="padding:8px;border-radius:8px;border:1px solid #d0d7e2" />
    </div>
  </div>

  <!-- Resume Container -->
  <div class="container">

    <div id="resume-area" class="resume">

      <!-- Left Column -->
      <div>
        <div style="display:flex; justify-content:space-between; align-items:center">
          <div>
            <div contenteditable="false" class="name" id="name">Your Name</div>
            <div contenteditable="false" class="title" id="title">Mechanical Engineer</div>
          </div>

          <div class="photo">
            <img id="avatarImg"
              src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?&w=600&q=60"
              class="avatar" />
            <input type="file" id="avatarInput" accept="image/*"
              style="margin-top:6px;font-size:12px" />
          </div>
        </div>

        <div class="section">
          <h3>Summary</h3>
          <div class="card">
            <p contenteditable="false">
              Experienced Mechanical Engineer with strong background in CAD, manufacturing,
              maintenance, thermal systems & industrial projects.
            </p>
          </div>
        </div>

        <div class="section">
          <h3>Experience</h3>
          <div class="card">
            <b>Mechanical Engineer — TATA Motors</b><br>
            <small style="color:var(--muted)">2021 - Present</small>
            <ul>
              <li>Handled production line maintenance and quality improvement.</li>
              <li>Reduced breakdowns by 30% using preventive maintenance systems.</li>
            </ul>
          </div>
        </div>

        <div class="section">
          <h3>Education</h3>
          <div class="card">
            <b>B.Tech — Mechanical Engineering</b><br>
            <small style="color:var(--muted)">2016 - 2020</small>
          </div>
        </div>
      </div>

      <!-- Right Sidebar -->
      <aside>
        <div class="section">
          <h3>Contact</h3>
          <div class="card">
            <div contenteditable="false">📧 email@example.com</div>
            <div contenteditable="false">📞 +91 98765 43210</div>
            <div contenteditable="false">📍 Bihar, India</div>
          </div>
        </div>

        <div class="section">
          <h3>Skills</h3>
          <div class="card skill-list">
            <span class="skill">AutoCAD</span>
            <span class="skill">SolidWorks</span>
            <span class="skill">Thermal</span>
            <span class="skill">Maintenance</span>
            <span class="skill">Quality</span>
          </div>
        </div>

        <div class="section">
          <h3>Certificates</h3>
          <div class="card">
            • AutoCAD Certified<br>
            • HVAC Training<br>
            • Industrial Safety
          </div>
        </div>
      </aside>

    </div>
  </div>

  <!-- PREMIUM POPUP -->
  <div id="premiumPopup">
    <div class="premium-box">
      <h2>🔒 Premium Feature</h2>
      <p>Resume PDF डाउनलोड सिर्फ Premium यूज़र्स के लिए है।</p>
      <p style="color:gold; font-size:20px"><b>Unlock ₹19</b></p>

      <button class="pay-btn" onclick="startPayment()">Pay Now</button>
      <button class="close-btn" onclick="closePopup()">Cancel</button>
    </div>
  </div>

<script>

  /* PREMIUM LOCK */
  function openPremium(){
    document.getElementById("premiumPopup").style.display="flex";
  }
  function closePopup(){
    document.getElementById("premiumPopup").style.display="none";
  }

  /* Payment + Download */
  function startPayment(){
    alert("Payment Gateway Coming Soon...\n\nPayment success → Resume PDF Download होगा");
    closePopup();
    generatePDF();
  }

  /* PDF Generator */
  function generatePDF(){
    const filename = document.getElementById('pdfFilename').value || 'resume.pdf';
    const area = document.getElementById('resume-area');

    html2pdf().set({
      margin:0.2,
      filename:filename,
      image:{type:'jpeg',quality:1},
      html2canvas:{scale:2, useCORS:true},
      jsPDF:{unit:'in',format:'a4',orientation:'portrait'}
    }).from(area).save();
  }

  /* Avatar Change */
  avatarInput.onchange = (e)=>{
    const f = e.target.files[0];
    if(!f) return;

    const r = new FileReader();
    r.onload = ev => avatarImg.src = ev.target.result;
    r.readAsDataURL(f);
  };

  /* Edit Mode */
  let editing=false;
  toggleEdit.onclick = ()=>{
    editing=!editing;

    document.querySelectorAll('#resume-area *').forEach(el=>{
      if(el.innerText.trim().length>0 && !el.classList.contains('skill')){
        el.contentEditable = editing;
        el.style.outline = editing ? '1px dashed #007bff55' : 'none';
      }
    });

    toggleEdit.textContent = editing ? "Save" : "Enable Edit";
  };

</script>

</body>
</html>
