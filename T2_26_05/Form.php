<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <br>
        <form action="" method="post">
            <h3>Đăng ký học kỳ 4</h3>
            Họ tên:   <input type="text" name="fullname"> </br>
            Password: <input type="password" name="password"> <br>
            Quốc gia: <select name="country">
                        <option value="Việt Nam">Việt Nam</option>
                        <option value="Mỹ">Mỹ</option>
                        <option value="Nhật Bản">Nhật Bản</option>
                        <option value="Pháp">Pháp</option>
                        <option value="Anh">Anh</option>
                        <option value="Trung Quốc">Trung Quốc</option>
                        </select> <br>
            Thành phố: <select name="city">
                        <option value="Hà Nội">Hà Nội</option>
                        <option value="Hồ Chí Minh">Hồ Chí Minh</option>
                        <option value="Đà Nẵng">Đà Nẵng</option>
                        <option value="Hải Phòng">Hải Phòng</option>
                        <option value="Cần Thơ">Cần Thơ</option>
                        </select> <br>
                      <input type="checkbox" name="checkbox_html" value="HTML">HTML </br>
                      <input type="checkbox" name="checkbox_css" value="CSS">CSS </br>
                      <input type="submit" name="submit" value="Đăng nhập">
        </form>
        <h1></h1></br>
        <h1></h1></br>
        <?php
            if(isset($_POST['fullname'])) {echo "Họ tên: ",$_POST['fullname'],"<br/>";} 
            if(isset($_POST['password'])) {echo "Password: ",$_POST['password'],"<br/>";}
            if(isset($_POST['country'])) {echo "Quốc gia: ",$_POST['country'],"<br/>";}
            if(isset($_POST['city'])) {echo "Thành phố: ",$_POST['city'],"<br/>";}
            if(isset($_POST['checkbox_html'])) {echo $_POST['checkbox_html'],"<br/>";}
            if(isset($_POST['checkbox_css'])) {echo $_POST['checkbox_css'],"<br/>";}
        ?>
    </body>
</html>