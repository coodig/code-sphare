<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>CodeSphare</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="asset/css/style.css">
</head>
<body>

  <!-- 🔝 Navbar -->
  <?php include 'views/layout/navbar.php' ?>

  <!-- 🧩 Main Page Layout -->
  <div class="main-wrapper">
    <!-- 📚 Sidebar -->
     <?php include '<views/layout/sidebar.php' ?> 

    <!-- 🖥️ Main Content -->
    <div class="main-content">
      <h3>Welcome to CodeSphare</h3>
      <p>This is your coding playground. Choose a problem, write your solution, and test it here.</p>

      <!-- 🧪 Coding Interface Placeholder -->
      <div class="card p-3 mt-3">
        <p><em>Insert your coding interface or problem display module here.</em></p>
      </div>
    </div>
  </div>

  <?php include 'views/layout/footer.php' ?>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
