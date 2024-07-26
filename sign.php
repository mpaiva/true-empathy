<?php
session_start();

// Check if honeypot field is filled
if (!empty($_POST['honeypot'])) {
    // Possible spam bot, do nothing
    exit;
}

// Sanitize and validate form data
$first_name = htmlspecialchars(trim($_POST['first_name']), ENT_QUOTES, 'UTF-8');
$last_name = htmlspecialchars(trim($_POST['last_name']), ENT_QUOTES, 'UTF-8');
$full_name = $first_name . ' ' . $last_name;
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
$role = htmlspecialchars(trim($_POST['role']), ENT_QUOTES, 'UTF-8');
$company = htmlspecialchars(trim($_POST['company']), ENT_QUOTES, 'UTF-8');
$city = htmlspecialchars(trim($_POST['city']), ENT_QUOTES, 'UTF-8');
$country = htmlspecialchars(trim($_POST['country']), ENT_QUOTES, 'UTF-8');

// Basic validation
if (!$first_name || !$last_name || !$email || !$role || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Location: index.php?error=missing_data');
    exit;
}

// Path to the signatures file
$signatures_file = 'signatures/signatures.json';

// Load existing signatures
$signatures = [];
if (file_exists($signatures_file)) {
    $signatures = json_decode(file_get_contents($signatures_file), true);
}

// Check for duplicates
$already_signed = false;
foreach ($signatures as $signature) {
    if ($signature['email'] === $email && $signature['company'] === $company) {
        $already_signed = true;
        $_SESSION['already_signed'] = true;
        $_SESSION['signed_date'] = $signature['timestamp'];
        break;
    }
}

if ($already_signed) {
    header('Location: index.php');
    exit;
}

// Add new signature
date_default_timezone_set('UTC');
$signatures[] = [
    'full_name' => $full_name,
    'email' => $email,
    'role' => $role,
    'company' => $company,
    'city' => $city,
    'country' => $country,
    'timestamp' => (new DateTime())->format(DateTime::ATOM) // Store timestamp in ATOM format
];

// Save signatures
if (file_put_contents($signatures_file, json_encode($signatures, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT))) {
    $_SESSION['success'] = true;
} else {
    $_SESSION['error'] = 'Unable to save your signature. Please try again later.';
}

header('Location: index.php');
exit;
?>