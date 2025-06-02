<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <br>
        <form action="" method="post">
            <h3>Đăng ký học kỳ 4</h3>
            Họ tên:   <input type="text" name="fullname"> <br>
            Password: <input type="password" name="password"> <br>
            Đăng ký học: <input type="checkbox" name="checkbox_html" value="HTML">HTML 
                      <input type="checkbox" name="checkbox_css" value="CSS">CSS </br>            
            Giới tính: <input type="radio" name="rad" value="Nam">Nam
                      <input type="radio" name="rad" value="Nữ">Nữ <br>
            Thành phố: <select name="city">
                        <option value="Hà Nội">Hà Nội</option>
                        <option value="Hồ Chí Minh">Hồ Chí Minh</option>
                        <option value="Đà Nẵng">Đà Nẵng</option>
                        <option value="Hải Phòng">Hải Phòng</option>
                        <option value="Cần Thơ">Cần Thơ</option>
                        </select> <br>
            Tin nhắn: <br>
            <textarea name="mess" rows="5" cols="40"></textarea> <br>
                      <input type="submit" name="submit" value="Gửi">
        </form>
        <h1></h1></br>
        <h1></h1></br>
        <?php
            if(empty($_POST['fullname']) || empty($_POST['password']) || empty($_POST['city']) || empty($_POST['mess']) || empty($_POST['rad'])) { 
                echo "Vui lòng nhập đầy đủ thông tin.";
                exit;
            }
            if(isset($_POST['fullname'])) {echo "Họ tên: ",$_POST['fullname'],"<br/>";} 
            if(isset($_POST['password'])) {echo "Password: ",$_POST['password'],"<br/>";}
            if(isset($_POST['checkbox_html'])) {echo $_POST['checkbox_html'],"<br/>";}
            if(isset($_POST['checkbox_css'])) {echo $_POST['checkbox_css'],"<br/>";}
            if(isset($_POST["rad"])) {
                if($_POST["rad"] == "Nam") {
                    echo "Giới tính: Nam <br/>";
                } else {
                    echo "Giới tính: Nữ <br/>";
                }
            }
            if(isset($_POST['city'])) {echo "Thành phố: ",$_POST['city'],"<br/>";}
            if(isset($_POST["mess"])) {
                echo "Tin nhắn: ",$_POST["mess"],"<br/>";
            }
        ?>
    </body>
</html>