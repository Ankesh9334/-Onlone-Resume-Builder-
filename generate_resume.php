<?php 
require __DIR__ . '/fpdf/fpdf.php';
require('common.php'); 

// FORM DATA
$name       = $_POST['name'];
$email      = $_POST['email'];
$phone      = $_POST['phone'];
$address    = $_POST['address'];
$summary    = $_POST['summary'];
$education  = $_POST['education'];
$experience = $_POST['experience'];
$skills     = $_POST['skills'];

// PROCESS IMAGE
$imagePath = handleProfileImage($_FILES['profile_picture']);

class PDF extends FPDF{

    function HeaderSection($image, $name, $email, $phone, $address)
    {
        if (!empty($image) && file_exists($image)) {
            $this->Image($image, 10, 20, 35, 35);
        }

        $this->SetXY(60, 20);
        $this->SetFont('Arial','B',16);
        $this->Cell(0,10,$name,0,1);

        $this->SetFont('Arial','',12);
        $this->SetX(60);
        $this->Cell(0,7,"Email: ".$email,0,1);

        $this->SetX(60);
        $this->Cell(0,7,"Phone: ".$phone,0,1);

        $this->SetX(60);
        $this->MultiCell(0,7,"Address: ".$address);

        $this->Ln(5);
        $this->SetLineWidth(0.5);
        $this->Line(10, 60, 200, 60);
        $this->Ln(8);
    }

    function Section($title, $content){
        $this->SetFont('Arial','B',14);
        $this->Cell(0,10,$title,0,1);

        $this->SetFont('Arial','',11);
        $this->MultiCell(0,7,$content);
        $this->Ln(5);
    }
}

// CREATE PDF
$pdf = new PDF();
$pdf->AddPage();

$pdf->HeaderSection($imagePath, $name, $email, $phone, $address);

if (!empty(trim($summary)))    $pdf->Section("Professional Summary", $summary);
if (!empty(trim($skills)))     $pdf->Section("Skills", $skills);
if (!empty(trim($experience))) $pdf->Section("Work Experience", $experience);
if (!empty(trim($education)))  $pdf->Section("Education", $education);

// SAVE PDF INTO FILE
$filename = "resume_".time().".pdf";
$pdf->Output("F", $filename);

// SHOW PREVIEW + DOWNLOAD BUTTON
echo "
<!DOCTYPE html>
<html>
<head>
<title>Resume Preview</title>
</head>
<body style='font-family:Arial; text-align:center;'>

<h2>Your Resume Preview</h2>

<iframe src='$filename' width='90%' height='600px' style='border:1px solid #ccc;'></iframe>

<br><br>

<a href='$filename' download>
    <button style='padding:12px 25px; background:green; color:white; border:none; border-radius:6px; cursor:pointer; font-size:16px;'>
        Download Resume
    </button>
</a>

<br><br>

<a href='index.php'>
    <button style='padding:10px 20px; background:#444; color:white; border:none; border-radius:6px; cursor:pointer;'>Create Another</button>
</a>

</body>
</html>
";
?>
