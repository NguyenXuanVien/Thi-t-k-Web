<?php
session_start();

// Hủy session
session_unset();
session_destroy();

// Xóa cookie
setcookie('username', '', time() - 3600, '/');

// Chuyển hướng về trang đăng nhập
header("Location: login.php");
exit();
?>
