<link rel="stylesheet" href="public/style.css">
<a href="admin.php?controller=add&action=index">Thêm mới</a>
<table border="1">
    <tr>
        <th>Mã SV</th><th>Họ tên SV</th><th>Ngày sinh</th><th>Giới tính</th><th>SĐT</th><th>Ảnh thẻ</th><th>Thao tác</th>
    </tr>
    <?php foreach ($data as $sv): ?>
    <tr>
        <td><?= $sv['ma_sv'] ?></td>
        <td><?= $sv['hoten'] ?></td>
        <td><?= $sv['ngaysinh'] ?></td>
        <td><?= $sv['gioitinh'] ?></td>
        <td><?= $sv['sdt'] ?></td>
        <td><img src="upload/<?= isset($sv['avatar']) ? $sv['avatar'] : 'default.png' ?>" width="50"></td>
        <td><a href="./admin.php?controller=delete&id=<?= $sv['id'] ?>" onclick="return confirm('Bạn có chắc muốn xóa?')">Xóa</a></td>
    </tr>
    <?php endforeach; ?>
</table>
