<?php
require_once __DIR__ . '/../model/sv.php';

class addController {
    private $model;
    public function __construct() {
        $this->model = new SinhVien();
    }
    public function index() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $uploadPath = 'public/upload/';
            $fileName = $_FILES['avatar']['name'];
            move_uploaded_file($_FILES['avatar']['tmp_name'], $uploadPath . $fileName);

            $data = [
                'ma_sv' => $_POST['ma_sv'],
                'hoten' => $_POST['hoten'],
                'ngaysinh' => $_POST['ngaysinh'],
                'gioitinh' => $_POST['gioitinh'],
                'sdt' => $_POST['sdt'],
                'avatar' => $fileName
            ];

            $sv = new SinhVien();
            $sv->add($data);
            header('Location: admin.php?controller=sv&action=index');
        }

        include '../view/add.php';
    }
}