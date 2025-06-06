<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>CodeSphare</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include 'layout/header.php'; ?> 
</head>
<body>

<?php include 'layout/navbar.php'; ?>

<div class="wrapper">
  <?php include 'layout/sidebar.php'; ?>

<div class="main-content p-4">
  <?php include 'pages/home.php'; ?>
</div>
</div>

<?php include 'layout/footer.php'; ?>

<!-- Bootstrap Bundle JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
