<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];
$cookieName = $_COOKIE['username'] ?? null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <h2>Xin chào, <?= htmlspecialchars($username) ?>!</h2>

    <?php if ($cookieName): ?>
        <p>Chào mừng trở lại, <?= htmlspecialchars($cookieName) ?>!</p>
    <?php endif; ?>

    <form method="post" action="logout.php">
        <button type="submit">Đăng xuất</button>
    </form>
</body>
</html>
