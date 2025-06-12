<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

$username = $_SESSION["username"];
$cookie_msg = isset($_COOKIE["username"]) ? "Chào mừng trở lại, " . $_COOKIE["username"] . "!" : "";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>
<body>
    <h2>Xin chào, <?= htmlspecialchars($username) ?>!</h2>
    <?php if ($cookie_msg) echo "<p>$cookie_msg</p>"; ?>
    <a href="logout.php">Đăng xuất</a>
</body>
</html>
