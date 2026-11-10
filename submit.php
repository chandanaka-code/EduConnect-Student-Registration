<?php
function safe($value) {
    return htmlspecialchars(trim((string)$value), ENT_QUOTES, 'UTF-8');
}
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}
$labels = [
    'fullname' => 'Full Name', 'dob' => 'Date of Birth',
    'email' => 'Email Address', 'phone' => 'Mobile Number',
    'gender' => 'Gender', 'address' => 'Address',
    'qualification' => 'Highest Qualification', 'course' => 'Course Applying For'
];
$data = [];
$errors = [];
foreach ($labels as $key => $label) {
    $data[$key] = safe($_POST[$key] ?? '');
    if ($data[$key] === '') $errors[] = $label . ' is required.';
}
$data['message'] = safe($_POST['message'] ?? '');
if (!filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL)) $errors[] = 'Enter a valid email address.';
if (!preg_match('/^[6-9][0-9]{9}$/', $_POST['phone'] ?? '')) $errors[] = 'Enter a valid 10-digit Indian mobile number.';
if (strlen(trim($_POST['fullname'] ?? '')) < 3) $errors[] = 'Name must contain at least 3 characters.';
if (strlen(trim($_POST['address'] ?? '')) < 8) $errors[] = 'Please enter a complete address.';
?>
<!DOCTYPE html>
<html lang="en"><head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration Result | EduConnect</title><link rel="stylesheet" href="style.css">
</head><body>
<header class="topbar"><div class="logo">E</div><div><b>EduConnect</b><small>STUDENT ADMISSIONS PORTAL</small></div></header>
<main class="result"><section class="result-card">
<?php if ($errors): ?>
<div class="check" style="color:#c0392b;background:#fdecec">!</div><h1>Unable to submit</h1>
<p class="lead">Please correct the following details:</p><ul>
<?php foreach ($errors as $error): ?><li><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></li><?php endforeach; ?>
</ul><div class="result-actions"><a class="btn primary" href="index.php">Go Back to Form</a></div>
<?php else: ?>
<div class="check">✓</div><label class="eyebrow">APPLICATION RECEIVED</label>
<h1>Thank you, <?php echo $data['fullname']; ?>!</h1>
<p class="lead">Your registration form has been submitted successfully. Here is your application summary.</p>
<div class="details">
<?php foreach ($labels as $key => $label): ?>
<div class="item"><small><?php echo htmlspecialchars($label, ENT_QUOTES, 'UTF-8'); ?></small><strong><?php echo $data[$key]; ?></strong></div>
<?php endforeach; ?>
<?php if ($data['message'] !== ''): ?><div class="item"><small>Additional Information</small><strong><?php echo nl2br($data['message']); ?></strong></div><?php endif; ?>
</div>
<p class="lead"><strong>Note:</strong> This demo displays submitted details but does not store them in a database.</p>
<div class="result-actions"><a class="btn primary" href="index.php">Back to Home</a><button class="btn secondary" onclick="window.print()">Print Details</button></div>
<?php endif; ?>
</section></main><footer>© 2026 EduConnect · Student Registration Portal</footer>
</body></html>
