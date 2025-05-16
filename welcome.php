<?php
require 'config.php';
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
?>

<h2>Selamat datang, <?php echo $_SESSION['username']; ?>!</h2>
<a href="logout.php">Logout</a>
