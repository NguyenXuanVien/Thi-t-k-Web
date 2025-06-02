<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <H2>DANH SÁCH ĐĂNG KÝ MÔN HỌC</H2>
        <form action="" method="post">
            <input type="checkbox" name="Thiết kế web" value="Thiết kế web">Thiết kế web <br>
            <input type="checkbox" name="Lập trình web" value="Lập trình web">Lập trình web <br>
            <input type="checkbox" name="Lập trình windows" value="Lập trình windows">Lập trình windows <br>
            <input type="checkbox" name="Thực hành lập trình windows" value="Thực hành lập trình windows">Thực hành lập trình windows <br>
            <input type="checkbox" name="Lập trình Android" value="Lập trình Android">Lập trình Android <br>
            <h1></h1></br>
            <H2>CA HỌC</H2>
            <input type="radio" name="ca_hoc" value="Ca sáng">Ca sáng <br>
            <input type="radio" name="ca_hoc" value="Ca chiều">Ca chiều <br>
            <input type="radio" name="ca_hoc" value="Ca tối">Ca tối <br>
            <input type="submit" name="submit" value="Lựa chon môn học và ca học">
        </form>
    </body>
    <h1></h1></br>
    <h1></h1></br>
    <?php
        if(isset($_POST['submit'])) {
            if(empty($_POST['Thiết kế web']) && empty($_POST['Lập trình web']) && empty($_POST['Lập trình windows']) && empty($_POST['Thực hành lập trình windows']) && empty($_POST['Lập trình Android'])) {
                echo "Vui lòng chọn ít nhất một môn học.";
            } else {
                if(isset($_POST['Thiết kế web'])) {echo "Môn học: ",$_POST['Thiết kế web'],"<br/>";}
                if(isset($_POST['Lập trình web'])) {echo "Môn học: ",$_POST['Lập trình web'],"<br/>";}
                if(isset($_POST['Lập trình windows'])) {echo "Môn học: ",$_POST['Lập trình windows'],"<br/>";}
                if(isset($_POST['Thực hành lập trình windows'])) {echo "Môn học: ",$_POST['Thực hành lập trình windows'],"<br/>";}
                if(isset($_POST['Lập trình Android'])) {echo "Môn học: ",$_POST['Lập trình Android'],"<br/>";}
            }
            
            if(empty($_POST['ca_hoc'])) {
                echo "Vui lòng chọn ca học.";
            } else {
                echo "Ca học: ",$_POST['ca_hoc'],"<br/>";
            }
        }