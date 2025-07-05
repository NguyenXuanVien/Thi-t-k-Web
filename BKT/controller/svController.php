<?php
require_once '../model/sv.php';

class svController {
    private $model;

    
    public function __construct() {
        $this->model = new SinhVien();
    }
    public function index() {
        $data = $this->model->getAll();
        include __DIR__ . '/../view/list.php';
    }

}
