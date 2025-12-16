<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Resume Builder Dashboard</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #eef1f7;
            color: #333;
        }

        /* HEADER */
        .header {
            background: #4c6ef5;
            padding: 18px 35px;
            color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 3px 8px rgba(0,0,0,0.2);
        }
        .header h1 {
            margin: 0;
            font-size: 26px;
        }
        .header .logo-box {
            display:flex;
            align-items:center;
            gap:12px;
        }
        .header img {
            width:45px;
            height:45px;
            border-radius:50%;
        }

        /* MAIN DASHBOARD */
        .dashboard-container {
            max-width: 1250px;
            margin: 40px auto;
            padding: 0 20px;
        }

        /* RESUME TEMPLATE GRID */
        .resume-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
        }

        .resume-card {
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            overflow: hidden;
            transition: 0.3s ease;
        }

        .resume-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 8px 22px rgba(0,0,0,0.15);
        }

        .resume-card img {
            width: 100%;
            height: 360px;
            object-fit: cover;
            border-bottom: 1px solid #eee;
        }

        .resume-info {
            padding: 18px;
        }

        .resume-info h3 {
            margin: 0;
            font-size: 18px;
            color: #4c6ef5;
        }

        .resume-info p {
            font-size: 14px;
            line-height: 1.6;
            margin-top: 8px;
        }

        .btn-use {
            display: inline-block;
            margin-top: 12px;
            padding: 10px 20px;
            background: #4c6ef5;
            color: #fff;
            text-decoration: none;
            border-radius: 25px;
            font-size: 14px;
        }

        .btn-use:hover {
            background: #364fc7;
        }

        /* SECTION TITLES */
        .section-title {
            text-align: center;
            margin-bottom: 30px;
            font-size: 28px;
            font-weight: bold;
            color: #333;
        }

    </style>
</head>
<body>

    <!-- HEADER WITH LOGO -->
    <div class="header">
        <div class="logo-box">
            <img src="images/ass-logo.png" alt="ASS Logo">
            <h1>Resume Builder Dashboard</h1>
        </div>
         <a href="#" style="color:#fff;text-decoration:none;font-size:16px;" data-bs-toggle="modal" data-bs-target="#loginModal">Create Resume</a>

    </div>

    <div class="dashboard-container">

        <h2 class="section-title">Choose Your Resume Template</h2>

        <!-- RESUME TEMPLATE CARDS -->
        <div class="resume-grid">

            <div class="resume-card">
                <img src="images/template1.png" alt="Template 1">
                <div class="resume-info">
                    <h3>Modern Blue Template</h3>
                    <p>A clean and professional layout ideal for corporate and IT jobs.</p>
                    <a href="#" class="btn-use">Use Template</a>
                </div>
            </div>

            <div class="resume-card">
                <img src="images/template2.png" alt="Template 2">
                <div class="resume-info">
                    <h3>Simple Professional</h3>
                    <p>Perfect for freshers and students applying for their first job.</p>
                    <a href="#" class="btn-use">Use Template</a>
                </div>
            </div>

            <div class="resume-card">
                <img src="images/template3.png" alt="Template 3">
                <div class="resume-info">
                    <h3>Elegant Gray</h3>
                    <p>Balanced and minimal design suitable for all industries.</p>
                    <a href="#" class="btn-use">Use Template</a>
                </div>
            </div>

            <div class="resume-card">
                <img src="images/template4.png" alt="Template 4">
                <div class="resume-info">
                    <h3>Creative Layout</h3>
                    <p>Modern creative design ideal for designers & freelancers.</p>
                    <a href="#" class="btn-use">Use Template</a>
                </div>
            </div>

        </div>

    </div>

</body>
</html>
