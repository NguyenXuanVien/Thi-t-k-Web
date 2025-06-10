<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng ký thành viên</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .form-container {
            width: 600px;
            margin: auto;
            border: 1px solid #ccc;
            padding: 20px;
        }
        h2 {
            background-color: #6c757d;
            color: white;
            padding: 10px;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input[type="text"],
        input[type="password"],
        input[type="email"],
        select,
        textarea {
            width: 100%;
            padding: 6px;
            margin-top: 5px;
            box-sizing: border-box;
        }
        .gender, .hobby {
            margin-top: 5px;
        }
        .button-group {
            margin-top: 20px;
        }
        .button-group input {
            padding: 10px 20px;
            margin-right: 10px;
            color: white;
            border: none;
            cursor: pointer;
        }
        .submit-btn {
            background-color: #007bff;
        }
        .reset-btn {
            background-color: #dc3545;
        }
    </style>
</head>
<body>

<div class="form-container">
    <form action="register.php" method="post">
        <h2>ĐĂNG KÝ THÀNH VIÊN</h2>

        <label>Tên truy cập</label>
        <input type="text" name="username" required>

        <label>Mật khẩu</label>
        <input type="password" name="password" required>

        <label>Nhập lại mật khẩu</label>
        <input type="password" name="repassword" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Phái:</label>
        <div class="gender">
            <input type="radio" name="gender" value="Nam" required> Nam
            <input type="radio" name="gender" value="Nữ"> Nữ
        </div>

        <label>Sở thích:</label>
        <div class="hobby">
            <input type="checkbox" name="hobby[]" value="Nhìn mưa rơi"> Nhìn mưa rơi
            <input type="checkbox" name="hobby[]" value="Nghe chim hót"> Nghe chim hót
            <input type="checkbox" name="hobby[]" value="Ngắm máy bay"> Ngắm máy bay
        </div>

        <label>Nghề nghiệp</label>
        <select name="job">
            <option value="">Bạn làm nghề gì</option>
            <option value="Sinh viên">Sinh viên</option>
            <option value="Giáo viên">Giáo viên</option>
            <option value="Lập trình viên">Lập trình viên</option>
        </select>

        <label>Giới thiệu bản thân</label>
        <textarea name="intro" rows="4"></textarea>

        <div class="button-group">
            <input type="submit" name="submit" value="Đăng ký" class="submit-btn">
            <input type="reset" value="Làm lại" class="reset-btn">
        </div>
    </form>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<div class='form-container'><h3>Thông tin bạn vừa đăng ký:</h3>";
    echo "Tên truy cập: " . htmlspecialchars($_POST["username"]) . "<br>";
    echo "Email: " . htmlspecialchars($_POST["email"]) . "<br>";
    echo "Phái: " . $_POST["gender"] . "<br>";
    echo "Sở thích: ";
    if (!empty($_POST["hobby"])) {
        echo implode(", ", $_POST["hobby"]);
    } else {
        echo "Không có";
    }
    echo "<br>";
    echo "Nghề nghiệp: " . $_POST["job"] . "<br>";
    echo "Giới thiệu: " . nl2br(htmlspecialchars($_POST["intro"])) . "<br>";
    echo "</div>";
}
?>

</body>
</html>
