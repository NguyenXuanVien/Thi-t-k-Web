<?php
class Database {
    public static function connect() {
        try {
            $pdo = new PDO("mysql:host=localhost;dbname=ql_sinhvien;charset=utf8", "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            die("Kết nối thất bại: " . $e->getMessage());
        }
    }
}
