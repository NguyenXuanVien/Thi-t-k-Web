<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <form action="" method="post">
            <h3>ĐĂNG KÝ THÀNH VIÊN</h3>
            Tên truy cập: <br>
            <input type="text" name="fullname"> <br>
            Mật khẩu: <br>
            <input type="password" name="password"> <br>
            Nhập lại mật khâu: <br>
            <input type="password" name="re_password"> <br>
            Email: <br>
            <input type="email" name="email"> <br>
            Giới tính: 
            <input type="radio" name="rad" value="Nam">Nam
            <input type="radio" name="rad" value="Nữ">Nữ <br>
            Sở thích: 
            <input type="checkbox" name="Nhìn mưa rơi" value="Nhìn mưa rơi">Nhìn mưa rơi 
            <input type="checkbox" name="Nghe chim hót" value="Nghe chim hót">Nghe chim hót 
            <input type="checkbox" name="Ngắm máy bay" value="Ngắm máy bay">Ngắm máy bay <br>
            Nghề nghiệp: <br>
            <select name="Nghề nghiệp">
                <option value="Kỹ sư">Kỹ sư</option>
                <option value="Giáo viên">Giáo viên</option>
                <option value="Bác sĩ">Bác sĩ</option>
                <option value="Lập trình viên">Lập trình viên</option>
                <option value="Nhân viên văn phòng">Nhân viên văn phòng</option>
            </select> <br>
            Giới thiệu bản thân: <br>
            <textarea name="mess" rows="5" cols="40"></textarea> <br>
            <input type="submit" name="submit" value="Đăng ký">
            <input type="reset" value="Làm lại">
        </form>
        <h1></h1></br>
        <h1></h1></br>
        <?php
            if(isset($_POST['submit'])) {
                if(empty($_POST['fullname']) || empty($_POST['password']) || empty($_POST['re_password']) || empty($_POST['email']) || empty($_POST['rad']) || empty($_POST['mess'])) {
                    echo "Vui lòng nhập đầy đủ thông tin.";
                    exit;
                }
                if($_POST['password'] !== $_POST['re_password']) {
                    echo "Mật khẩu không khớp.";
                    exit;
                }
                echo "Tên truy cập: ", $_POST['fullname'], "<br/>";
                echo "Mật khẩu: ", $_POST['password'], "<br/>";
                echo "Email: ", $_POST['email'], "<br/>";
                echo "Giới tính: ", $_POST['rad'], "<br/>";
                
                if(isset($_POST['Nhìn mưa rơi'])) {echo "Sở thích: ", $_POST['Nhìn mưa rơi'], "<br/>";}
                if(isset($_POST['Nghe chim hót'])) {echo "Sở thích: ", $_POST['Nghe chim hót'], "<br/>";}
                if(isset($_POST['Ngắm máy bay'])) {echo "Sở thích: ", $_POST['Ngắm máy bay'], "<br/>";}
                
                echo "Nghề nghiệp: ", $_POST['Nghề nghiệp'], "<br/>";
                echo "Giới thiệu bản thân: ", $_POST["mess"], "<br/>";
            }
        