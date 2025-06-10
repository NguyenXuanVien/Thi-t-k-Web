<?php
$arr = [1, 2, 3, 5, 4, 19, 5, 7, 15, 21];

// Bài 1: Tính tổng các phần tử
echo "<strong>Bài 1:</strong> Tổng các phần tử là: " . array_sum($arr) . "<br>";

// Bài 2: Tìm phần tử lớn nhất / nhỏ nhất
echo "<strong>Bài 2:</strong> Lớn nhất: " . max($arr) . " - Nhỏ nhất: " . min($arr) . "<br>";

// Bài 3: Đếm số phần tử chẵn và lẻ
$chan = 0; $le = 0;
foreach ($arr as $value) {
    if ($value % 2 == 0) $chan++;
    else $le++;
}
echo "<strong>Bài 3:</strong> Số chẵn: $chan - Số lẻ: $le<br>";

// Bài 4: Sắp xếp mảng tăng dần / giảm dần
$asc = $arr;
$desc = $arr;
sort($asc);
rsort($desc);
echo "<strong>Bài 4:</strong><br>+ Tăng dần: " . implode(', ', $asc);
echo "<br>+ Giảm dần: " . implode(', ', $desc) . "<br>";

// Bài 5: Xóa phần tử trùng lặp
$unique = array_unique($arr);
echo "<strong>Bài 5:</strong> Mảng sau khi loại bỏ trùng lặp: " . implode(', ', $unique) . "<br>";

// Bài 6: Đảo ngược mảng
$reverse = array_reverse($arr);
echo "<strong>Bài 6:</strong> Mảng đảo ngược: " . implode(', ', $reverse) . "<br>";

// Bài 7: Kiểm tra 21 có tồn tại trong mảng không
$exist = in_array(21, $arr);
echo "<strong>Bài 7:</strong> Số 21 " . ($exist ? "có" : "không") . " tồn tại trong mảng<br>";

// Bài 8: Gộp 2 mảng lại với nhau
$arr1 = [1, 2];
$arr2 = [3, 4];
$merged = array_merge($arr1, $arr2);
echo "<strong>Bài 8:</strong> Mảng sau khi gộp: " . implode(', ', $merged) . "<br>";

// Bài 9: Tìm phần tử xuất hiện nhiều nhất
$counts = array_count_values($arr);
$maxCount = max($counts);
$mostFrequent = array_keys($counts, $maxCount);
echo "<strong>Bài 9:</strong> Phần tử xuất hiện nhiều nhất: " . implode(', ', $mostFrequent) . " ($maxCount lần)<br>";

// Bài 10: Chuyển chuỗi thành mảng và ngược lại
$str = "1,2,3,4,5";
$strToArr = explode(',', $str);
$arrToStr = implode(',', $arr);
echo "<strong>Bài 10:</strong><br>+ Chuỗi -> Mảng: ";
print_r($strToArr);
echo "<br>+ Mảng -> Chuỗi: " . $arrToStr . "<br>";
?>
