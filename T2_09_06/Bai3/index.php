<?php
$name = $email = $password = $confirm_password = "";
$name_err = $email_err = $password_err = $confirm_password_err = "";
$success_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    // Validate name
    if (empty($name)) {
        $name_err = "Họ tên không được để trống.";
    } elseif (strlen($name) < 3) {
        $name_err = "Họ tên phải có ít nhất 3 ký tự.";
    }

    // Validate email
    if (empty($email)) {
        $email_err = "Email không được để trống.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_err = "Email không hợp lệ.";
    }

    // Validate password
    if (empty($password)) {
        $password_err = "Mật khẩu không được để trống.";
    } elseif (strlen($password) < 6) {
        $password_err = "Mật khẩu phải có ít nhất 6 ký tự.";
    }

    // Validate confirm_password
    if (empty($confirm_password)) {
        $confirm_password_err = "Vui lòng nhập lại mật khẩu.";
    } elseif ($password !== $confirm_password) {
        $confirm_password_err = "Mật khẩu không khớp.";
    }

    // Nếu không có lỗi
    if (empty($name_err) && empty($email_err) && empty($password_err) && empty($confirm_password_err)) {
        $success_message = "Đăng ký thành công!";
        // Có thể lưu dữ liệu vào CSDL ở đây
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Đăng Ký Tài Khoản</title>
</head>
<body>
    <h2>Đăng Ký Tài Khoản</h2>
    <?php if ($success_message) echo "<p style='color: green;'>$success_message</p>"; ?>
    <form method="post" action="">
        <label>Họ tên:</label><br>
        <input type="text" name="name" value="<?= htmlspecialchars($name) ?>"><br>
        <span style="color:red"><?= $name_err ?></span><br>

        <label>Email:</label><br>
        <input type="text" name="email" value="<?= htmlspecialchars($email) ?>"><br>
        <span style="color:red"><?= $email_err ?></span><br>

        <label>Mật khẩu:</label><br>
        <input type="password" name="password"><br>
        <span style="color:red"><?= $password_err ?></span><br>

        <label>Xác nhận mật khẩu:</label><br>
        <input type="password" name="confirm_password"><br>
        <span style="color:red"><?= $confirm_password_err ?></span><br><br>

        <button type="submit">Đăng Ký</button>
    </form>
</body>
</html>
