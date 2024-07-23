<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Any PHP code here
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title id="pageTitle">The True Empathy Pledge</title>
  <link rel="stylesheet" href="css/styles.css">
  <link href="https://fonts.googleapis.com/css2?family=Gwendolyn&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <script type="text/javascript" src="js/translations.js"></script>
  <script type="text/javascript" src="js/location.js"></script>
  <script type="text/javascript" src="js/modeToggle.js"></script>
  <script type="text/javascript" src="js/skipto.js"></script>
</head>

<body class="bg-gray-900 text-gray-100 dark:bg-gray-800 dark:text-gray-100">
  <div class="container p-6 rounded-lg shadow-lg">
    <?php include 'partials/header.php'; ?>
    <main>
      <?php include 'partials/principles.php'; ?>
      <?php include 'partials/pledgeForm.php'; ?>
      <?php include 'partials/signatures.php'; ?>
      <?php include 'partials/merchandise.php'; ?>
    </main>
    <?php include 'partials/footer.php'; ?>
    <script type="text/javascript" src="js/init.js"></script>

  </div>
</body>

</html>