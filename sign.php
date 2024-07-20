<?php
session_start();

// Check if honeypot field is filled
if (!empty($_POST['honeypot'])) {
    // Possible spam bot, do nothing
    exit;
}

$full_name = trim($_POST['full_name']);
$email = trim($_POST['email']);
$role = trim($_POST['role']);
$company = trim($_POST['company']);
$city = trim($_POST['city']);
$country = trim($_POST['country']);

if (!$full_name || !$email || !$role) {
    header('Location: index.php?error=missing_data');
    exit;
}

// Load existing signatures
$signatures = [];
if (file_exists('signatures.json')) {
    $signatures = json_decode(file_get_contents('signatures.json'), true);
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
$signatures[] = [
    'full_name' => $full_name,
    'email' => $email,
    'role' => $role,
    'company' => $company,
    'city' => $city,
    'country' => $country,
    'timestamp' => time()
];

// Save signatures
file_put_contents('signatures.json', json_encode($signatures));

$_SESSION['success'] = true;
header('Location: index.php');
?>
