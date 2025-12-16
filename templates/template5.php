<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Engineer Resume Template</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f6fa;
        }

        .resume-container {
            max-width: 850px;
            margin: 40px auto;
            background: #fff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 14px rgba(0,0,0,0.1);
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header h1 {
            margin: 0;
            font-size: 32px;
            color: #333;
        }

        .header p {
            font-size: 16px;
            color: #555;
            margin: 3px 0;
        }

        .section {
            margin-top: 35px;
        }

        .section h2 {
            border-left: 5px solid #4c6ef5;
            padding-left: 10px;
            font-size: 22px;
            color: #4c6ef5;
            margin-bottom: 15px;
        }

        .section p,
        .section li {
            font-size: 15px;
            color: #444;
            line-height: 1.7;
        }

        ul {
            margin-top: 8px;
        }

        .two-column {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .skill-box span {
            padding: 6px 12px;
            background: #eef1ff;
            border-radius: 6px;
            margin: 6px;
            display: inline-block;
            font-size: 14px;
            color: #333;
        }

        .download-btn {
            margin-top: 30px;
            display: inline-block;
            padding: 12px 25px;
            background: #4c6ef5;
            color: #fff;
            text-decoration: none;
            font-size: 16px;
            border-radius: 8px;
        }

    </style>
</head>
<body>

<div class="resume-container">

    <!-- HEADER -->
    <div class="header">
        <div>
            <h1>Rahul Sharma</h1>
            <p>Software / Computer Science Engineer</p>
            <p>Email: rahulsharma@gmail.com | Phone: 9876543210</p>
            <p>Address: Delhi, India</p>
        </div>
    </div>

    <!-- SUMMARY -->
    <div class="section">
        <h2>Professional Summary</h2>
        <p>
            Enthusiastic and detail‑oriented Computer Science Engineer with expertise in software development,
            debugging, system design, and problem‑solving. Strong understanding of algorithms, object‑oriented
            programming, and database management. Passionate about creating scalable and efficient applications.
        </p>
    </div>

    <!-- EDUCATION -->
    <div class="section">
        <h2>Education</h2>
        <p><strong>B.Tech in Computer Science Engineering</strong> – Delhi Technical University (2019–2023)</p>
        <p>CGPA: 8.5</p>
    </div>

    <!-- EXPERIENCE -->
    <div class="section">
        <h2>Experience</h2>
        <p><strong>Software Developer Intern – Infosys</strong> (6 Months)</p>
        <ul>
            <li>Developed and optimized web modules using HTML, CSS, JavaScript, and PHP.</li>
            <li>Improved system performance by 30% through better algorithm design.</li>
            <li>Worked with MySQL database for backend operations and data structuring.</li>
        </ul>
    </div>

    <!-- PROJECTS -->
    <div class="section">
        <h2>Projects</h2>
        <p><strong>1. Resume Builder Web App</strong></p>
        <ul>
            <li>Designed full-stack resume generator using HTML, CSS, JS, and PHP.</li>
            <li>Integrated PDF download and multiple professional templates.</li>
        </ul>

        <p><strong>2. College Attendance System</strong></p>
        <ul>
            <li>Built attendance tracking software using Python and MySQL.</li>
            <li>Implemented automated report generation and data visualization.</li>
        </ul>
    </div>

    <!-- SKILLS -->
    <div class="section">
        <h2>Skills</h2>
        <div class="skill-box">
            <span>Java</span>
            <span>Python</span>
            <span>C++</span>
            <span>HTML / CSS</span>
            <span>JavaScript</span>
            <span>MySQL</span>
            <span>Data Structures</span>
            <span>Algorithms</span>
            <span>Git</span>
        </div>
    </div>

    <!-- DOWNLOAD BUTTON -->
    <a class="download-btn" href="#">Download as PDF</a>

</div>

</body>
</html>
