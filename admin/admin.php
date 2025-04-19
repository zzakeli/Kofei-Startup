<?php
session_start();

if (!isset($_SESSION['user'])) {
  header("location: /site/php/index/body.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin</title>
  <link rel="stylesheet" href="admin.css" />
</head>

<body>
  <div class="admin-container">
    <div class="top-width">
      <h1 class="dashboard-name">DASHBOARD</h1>
      <div class="top-right-container">
        <button class="switch-mode">switch to user</button>
        <img class="profile" src="/src/profile.png" />
      </div>
    </div>
    <div class="flex-container">
      <div class="navbar">
        <a href="/admin/boards/dashboard.php" target="main">Dashboard</a>
        <a href="/admin/boards/kofai.php" target="main">Kofai</a>
        <a href="/admin/boards/donut.php" target="main">Donut</a>
        <a href="/admin/boards/bundle.php" target="main">Bundle</a>
        <a href="/admin/boards/orders.html" target="main">Orders</a>
        <a href="/admin/boards/notification.html" target="main">Notification</a>
      </div>
      <div class="main-panel">
        <iframe id="main-frame" src="/admin/boards/dashboard.php" class="main" name="main"></iframe>
      </div>
    </div>
  </div>
  <script>
    frameSource = document.getElementById("main-frame");
  </script>

  <script src="admin.js"></script>
</body>

</html>