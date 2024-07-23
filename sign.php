<?php
session_start();

// Check if honeypot field is filled
if (!empty($_POST['honeypot'])) {
    // Possible spam bot, do nothing
    exit;
}

// Collect form data
$first_name = trim($_POST['first_name']);
$last_name = trim($_POST['last_name']);
$full_name = $first_name . ' ' . $last_name;
$email = trim($_POST['email']);
$role = trim($_POST['role']);
$company = trim($_POST['company']);
$city = trim($_POST['city']);
$country = trim($_POST['country']);

// Basic validation
if (!$first_name || !$last_name || !$email || !$role) {
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
if (file_put_contents($signatures_file, json_encode($signatures))) {
    $_SESSION['success'] = true;
} else {
    $_SESSION['error'] = 'Unable to save your signature. Please try again later.';
}

header('Location: index.php');
exit;
?>