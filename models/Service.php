<?php
// models/Service.php
require_once 'db.php';

class Service {
    // Récupère tous les services
    public static function getAll() {
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM services");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Ajoute un nouveau service
    public static function add($service_name, $max_subscribers, $revenue_per_subscriber) {
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO services (service_name, max_subscribers, revenue_per_subscriber) VALUES (?, ?, ?)");
        return $stmt->execute([$service_name, $max_subscribers, $revenue_per_subscriber]);
    }
}
?>
