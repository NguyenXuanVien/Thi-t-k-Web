<?php
session_start();

$username = $password = "";
$username_err = $password_err = $login_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    // Kiểm tra username
    if (empty($username)) {
        $username_err = "Tên đăng nhập không được để trống.";
    }

    // Kiểm tra password
    if (empty($password)) {
        $password_err = "Mật khẩu không được để trống.";
    } elseif (strlen($password) < 6) {
        $password_err = "Mật khẩu phải có ít nhất 6 ký tự.";
    }

    // Nếu không có lỗi, kiểm tra tài khoản
    if (empty($username_err) && empty($password_err)) {
        if ($username === "admin" && $password === "123456") {
            $_SESSION["username"] = $username;
            setcookie("username", $username, time() + 300); // 5 phút
            header("Location: welcome.php");
            exit;
        } else {
            $login_err = "Sai tài khoản hoặc mật khẩu!";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Đăng Nhập</title>
</head>
<body>
    <h2>Đăng Nhập</h2>
    <?php if ($login_err) echo "<p style='color:red;'>$login_err</p>"; ?>
    <form method="post" action="">
        <label>Tên đăng nhập:</label><br>
        <input type="text" name="username" value="<?= htmlspecialchars($username) ?>"><br>
        <span style="color:red"><?= $username_err ?></span><br>

        <label>Mật khẩu:</label><br>
        <input type="password" name="password"><br>
        <span style="color:red"><?= $password_err ?></span><br><br>

        <button type="submit">Đăng nhập</button>
    </form>
</body>
</html>
