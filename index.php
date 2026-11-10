<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Registration | EduConnect</title>
<link rel="stylesheet" href="style.css">
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="script.js" defer></script>
</head>
<body>
<header class="topbar"><div class="logo">E</div><div><b>EduConnect</b><small>STUDENT ADMISSIONS PORTAL</small></div><span>ONLINE REGISTRATION</span></header>
<main class="wrap">
<div class="intro"><label>ACADEMIC YEAR 2026–27</label><h1>Student Registration</h1><p>Complete the form below to submit your application. Please ensure that the information you provide is correct.</p></div>
<form id="registrationForm" action="submit.php" method="POST" novalidate>
<section class="card">
<div class="section"><span>01</span><div><h2>Personal Information</h2><p>Tell us a little about yourself.</p></div></div>
<div class="grid">
<div class="field"><label for="fullname">Full Name *</label><input id="fullname" name="fullname" placeholder="Enter your full name" required><small class="error"></small></div>
<div class="field"><label for="dob">Date of Birth *</label><input type="date" id="dob" name="dob" required><small class="error"></small></div>
<div class="field"><label for="email">Email Address *</label><input type="email" id="email" name="email" placeholder="name@example.com" required><small class="error"></small></div>
<div class="field"><label for="phone">Mobile Number *</label><input type="tel" id="phone" name="phone" maxlength="10" placeholder="10-digit mobile number" required><small class="error"></small></div>
<div class="field"><label>Gender *</label><div class="radios"><label><input type="radio" name="gender" value="Female"> Female</label><label><input type="radio" name="gender" value="Male"> Male</label><label><input type="radio" name="gender" value="Other"> Other</label></div><small class="error" id="genderError"></small></div>
<div class="field wide"><label for="address">Address *</label><textarea id="address" name="address" rows="3" placeholder="Enter your full address" required></textarea><small class="error"></small></div>
</div></section>
<section class="card">
<div class="section"><span>02</span><div><h2>Academic Information</h2><p>Select the programme you wish to apply for.</p></div></div>
<div class="grid">
<div class="field"><label for="qualification">Highest Qualification *</label><select id="qualification" name="qualification" required><option value="">Select qualification</option><option>PUC / 12th Standard</option><option>Diploma</option><option>Undergraduate</option><option>Postgraduate</option></select><small class="error"></small></div>
<div class="field"><label for="course">Course Applying For *</label><select id="course" name="course" required><option value="">Select a course</option><option>B.E. Computer Science</option><option>B.E. Information Science</option><option>B.E. Electronics and Communication</option><option>BBA</option><option>B.Com</option><option>MCA</option></select><small class="error"></small></div>
<div class="field wide"><label for="message">Additional Information</label><textarea id="message" name="message" rows="3" placeholder="Any additional information (optional)"></textarea></div>
</div></section>
<div class="actions"><p><b>*</b> Required fields</p><button type="reset" class="btn secondary">Clear Form</button><button type="submit" class="btn primary">Submit Application →</button></div>
<p class="privacy">Your information is used only for this demonstration registration process.</p>
</form></main><footer>© 2026 EduConnect · Student Registration Portal</footer>
</body></html>
