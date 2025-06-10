<?php
// Bài 1: Hàm tính tổng hai số
function tinhTong($a, $b) {
    return $a + $b;
}

// Bài 2: Hàm kiểm tra số chẵn
function laSoChan($n) {
    return $n % 2 == 0;
}

// Bài 3: Hàm tìm số lớn nhất trong mảng
function timMax($arr) {
    return max($arr);
}

// Bài 4: Hàm in bảng cửu chương của một số
function inBangCuuChuong($n) {
    echo "Bảng cửu chương của $n:<br>";
    for ($i = 1; $i <= 10; $i++) {
        echo "$n x $i = " . ($n * $i) . "<br>";
    }
}

// Bài 5: Hàm tính diện tích các hình
function dienTichTron($r) {
    return round(pi() * $r * $r, 2);
}

function dienTichChuNhat($dai, $rong) {
    return $dai * $rong;
}

function dienTichTamGiac($a, $h) {
    return 0.5 * $a * $h;
}

// Bài 6: Hàm chuyển đổi độ C sang độ F
function chuyenDoC_sang_DoF($c) {
    return ($c * 9/5) + 32;
}

// Gọi thử các hàm
echo "Tổng 5 + 10 = " . tinhTong(5, 10) . "<br>";

$n = 8;
echo "$n là " . (laSoChan($n) ? "số chẵn" : "số lẻ") . "<br>";

$arr = [4, 9, 2, 7];
echo "Số lớn nhất trong mảng: " . timMax($arr) . "<br>";

inBangCuuChuong(7);

echo "Diện tích hình tròn (r=3): " . dienTichTron(3) . "<br>";
echo "Diện tích hình chữ nhật (4x6): " . dienTichChuNhat(4, 6) . "<br>";
echo "Diện tích tam giác (a=5, h=3): " . dienTichTamGiac(5, 3) . "<br>";

echo "25°C = " . chuyenDoC_sang_DoF(25) . "°F<br>";
?>

