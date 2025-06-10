<?php
session_start();

// Nếu đã đăng nhập rồi thì chuyển hướng sang welcome
if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
    exit();
}

// Xử lý khi gửi form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Kiểm tra thông tin đăng nhập (giả lập)
    if ($username === 'admin' && $password === '123456') {
        $_SESSION['username'] = $username;

        // Lưu cookie 5 phút
        setcookie('username', $username, time() + 300, '/');

        header("Location: welcome.php");
        exit();
    } else {
        $error = "Tên đăng nhập hoặc mật khẩu không đúng!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Đăng nhập</title>
</head>
<body>
    <h2>Đăng nhập</h2>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <form method="post" action="">
        <label>Username:</label>
        <input type="text" name="username" required><br><br>

        <label>Password:</label>
        <input type="password" name="password" required><br><br>

        <button type="submit">Đăng nhập</button>
    </form>
</body>
</html>
