<?php
// Bài 2
echo "Tên sinh viên: Nguyễn Xuân Viện";
echo "Lớp: 2623CNT05";
echo "Môn học: Lập trình web với PHP";
// Bài 3
$number = 7; // Nhập số cần kiểm tra

if ($number % 2 == 0) {
    echo "$number là số chẵn<br>";
} else {
    echo "$number là số lẻ<br>";
}
// Bài 4
$km = 150; // Nhập số km cần tính
$cost = 0;

if ($km <= 1) {
    $cost = 15000;
} elseif ($km <= 5) {
    $cost = 15000 + ($km - 1) * 12000;
} else {
    $cost = 15000 + 4 * 12000 + ($km - 5) * 9000;
}

if ($km > 140) {
    $cost *= 0.88; 
}

echo "Số tiền cần thanh toán cho $km km là: " . number_format($cost, 0, ',', '.') . " đ<br>";
// Bài 5
$coin = rand(0, 1);

if ($coin == 1) {
    echo "Đồng xu: Mặt lẻ<br>";
} else {
    echo "Đồng xu: Mặt chẵn<br>";
}
?>