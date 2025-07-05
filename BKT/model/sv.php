<?php
require_once '../config/database.php';

class SinhVien {
    private $pdo;

    public function __construct() {
        $this->pdo = Database::connect();
    }

    public function getAll() {
        $stmt = $this->pdo->prepare("SELECT * FROM sinhvien");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function add($data) {
        $sql = "INSERT INTO sinhvien(ma_sv, hoten, ngaysinh, gioitinh, sdt, avatar) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            $data['ma_sv'], $data['hoten'], $data['ngaysinh'], $data['gioitinh'], $data['sdt'], $data['avatar']
        ]);
    }
    public function delete($id) {
    $stmt = $this->pdo->prepare("DELETE FROM sinhvien WHERE id = ?");
    return $stmt->execute([$id]);
}

}
