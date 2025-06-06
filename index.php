<?php include 'views/layout/header.php';?>

<body>

  <!-- 🔝 Navbar -->
  <?php include 'views/layout/navbar.php' ?>

  <!-- 🧩 Main Page Layout -->
  <div class="main-wrapper">
    <!-- 📚 Sidebar -->
     <?php include '<views/layout/sidebar.php' ?> 

    <!-- 🖥️ Main Content -->
    <div class="main-content" id="main-content">
     <?php include 'home.php'; ?>
    </div>

  </div>

  <?php include 'views/layout/footer.php' ?>

  <!-- Bootstrap JS -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->
</body>
</html>
