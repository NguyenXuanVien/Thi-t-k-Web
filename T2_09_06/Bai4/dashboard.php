<?php
session_start();

if (!isset($_SESSION["username"]) || !isset($_SESSION["role"])) {
    header("Location: login.php");
    exit;
}

$username = $_SESSION["username"];
$role = $_SESSION["role"];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Bảng Điều Khiển</title>
</head>
<body>
    <h2>Xin chào, <?= htmlspecialchars($username) ?>!</h2>

    <?php if ($role === "admin"): ?>
        <p>Chào <strong>admin</strong>, bạn có toàn quyền hệ thống.</p>
    <?php elseif ($role === "user"): ?>
        <p>Chào <strong>người dùng</strong>, bạn chỉ có quyền xem.</p>
    <?php else: ?>
        <p>Vai trò không hợp lệ.</p>
    <?php endif; ?>

</body>
</html>
