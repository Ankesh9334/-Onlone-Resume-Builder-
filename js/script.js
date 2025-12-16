// Premium Popup
function openPremium(){
  document.getElementById("premiumPopup").style.display="flex";
}
function closePopup(){
  document.getElementById("premiumPopup").style.display="none";
}

// Payment simulation + download
function startPayment(){
  alert("Payment Gateway Coming Soon...\nAfter payment, PDF will download automatically.");
  closePopup();
  generatePDF();
}

// Generate PDF
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

// Avatar change
const avatarInput = document.getElementById('avatarInput');
const avatarImg = document.getElementById('avatarImg');
avatarInput.onchange = (e)=>{
  const f = e.target.files[0];
  if(!f) return;
  const r = new FileReader();
  r.onload = ev => avatarImg.src = ev.target.result;
  r.readAsDataURL(f);
};

// Edit mode
const toggleEdit = document.getElementById('toggleEdit');
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
