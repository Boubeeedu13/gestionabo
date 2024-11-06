<?php
// models/Platform.php
require_once 'db.php';

class Platform {
    // Récupère toutes les plateformes
    public static function getAll() {
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM platforms");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Ajoute une nouvelle plateforme
    public static function add($platform_name) {
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO platforms (platform_name) VALUES (?)");
        return $stmt->execute([$platform_name]);
    }
}
?>
