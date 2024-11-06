<?php
// models/Account.php
require_once 'db.php';

class Account {
    public static function getAll() {
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM accounts");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function add($platform_id, $email) {
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO accounts (platform_id, email) VALUES (?, ?)");
        return $stmt->execute([$platform_id, $email]);
    }
}
?>
