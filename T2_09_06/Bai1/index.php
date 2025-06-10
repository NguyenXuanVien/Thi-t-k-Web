<?php
require_once 'Database.php';

$db = new Database();
$conn = $db->connect();

$sql = "SELECT products.name AS product_name, price, products.created_at, 
               users.name AS user_name, categories.name AS category_name
        FROM products
        JOIN users ON products.user_id = users.id
        JOIN categories ON products.category_id = categories.id";

$stmt = $conn->prepare($sql);
$stmt->execute();
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Danh sách sản phẩm</title>
    <style>
        table { border-collapse: collapse; width: 80%; margin: 20px auto; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: center; }
        th { background-color: #eee; }
    </style>
</head>
<body>
    <h2 style="text-align:center;">Danh sách sản phẩm</h2>
    <table>
        <tr>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Người đăng</th>
            <th>Danh mục</th>
            <th>Ngày tạo</th>
        </tr>
        <?php foreach ($products as $product): ?>
        <tr>
            <td><?= htmlspecialchars($product['product_name']) ?></td>
            <td><?= number_format($product['price'], 0, ',', '.') ?> đ</td>
            <td><?= htmlspecialchars($product['user_name']) ?></td>
            <td><?= htmlspecialchars($product['category_name']) ?></td>
            <td><?= $product['created_at'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
