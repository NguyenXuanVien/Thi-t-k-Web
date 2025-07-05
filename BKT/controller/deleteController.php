<?php
require_once __DIR__ . '/../model/sv.php';
class DeleteController {
    private $model;

    public function __construct() {
        $this->model = new SinhVien();
    }

    public function index() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            if ($this->model->delete($id)) {
                header('Location: admin.php?controller=sv&action=index');
                exit;
            }
        }
    }
}