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

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100..900;1,100..900&family=Ubuntu+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Gwendolyn&display=swap" rel="stylesheet">




  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <script type="text/javascript" src="js/translations.js"></script>
  <script type="text/javascript" src="js/location.js"></script>
  <script type="text/javascript" src="js/modeToggle.js"></script>
  <script type="text/javascript" src="js/skipto.js"></script>
  <?php include 'partials/skipto-config.php'; ?>
</head>

<body class="transition-colors duration-2000 bg-gray-900 text-gray-100 dark:bg-gray-800 dark:text-gray-100">
  <div
    class="container p-6 rounded-lg shadow-lg  transition-colors duration-2000 bg-white text-gray-900 dark:bg-gray-900 dark:text-gray-200"">
    <?php include 'partials/header.php'; ?>
    <main>
      <?php include 'partials/principles.php'; ?>
      <?php include 'partials/pledgeForm.php'; ?>
      <?php include 'partials/signatures.php'; ?>
      <?php include 'partials/merchandise.php'; ?>
    </main>
    <?php include 'partials/footer.php'; ?>
    <script type=" text/javascript" src="js/init.js">
    </script>

  </div>
</body>

</html>