<div class="container">
     <!-- <style>
          h2 {
               text-align: center;
               margin: 14px 0 18px 0;
               font-size: 26px;
               font-weight: 700;
               color: black;
          }
     </style> -->
     <h2>📝 Online Resume Builder</h2>

     <form action="generate_resume.php" method="POST" enctype="multipart/form-data">
     	<label>Full Name</label>
     	<input type="text" name="name" placeholder="Full Name" required>

     	<label>Email</label>
     	<input type="email" name="email" placeholder="Email Address" required>

     	<label>Phone Number</label>
     	<input type="text" name="phone" placeholder="Phone" required>

     	<label>Address</label>
     	<input type="text" name="address" placeholder="Full Address" required>

     	<label>Profile Summary</label>
     	<textarea name="summary" placeholder="Professional Summary..." required></textarea>

     	<label>Education</label>
     	<textarea name="education" placeholder="Education Details" required></textarea>

     	<label>Work Experience</label>
     	<textarea name="experience" placeholder="Work Experience" required></textarea>

     	<label>Skills</label>
     	<textarea name="skills" placeholder="Key Skills" required></textarea>

     	<label>Upload Profile Picture</label>
     	<input type="file" name="profile_picture">

     	<button type="submit">Generate Resume</button>
     </form>
</div>
