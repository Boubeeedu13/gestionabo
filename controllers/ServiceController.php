<?php
// controllers/ServiceController.php
require_once __DIR__ . '/../models/Service.php';

class ServiceController {
    public function list() {
        // Récupère tous les services et affiche la liste
        $services = Service::getAll();
        require __DIR__ . '/../views/service_list.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Récupère les données du formulaire et ajoute un nouveau service
            $service_name = $_POST['service_name'];
            $max_subscribers = $_POST['max_subscribers'];
            $revenue_per_subscriber = $_POST['revenue_per_subscriber'];
            Service::add($service_name, $max_subscribers, $revenue_per_subscriber);
            header("Location: /gestion_abonnements/index.php?action=list_services");
        } else {
            // Affiche le formulaire de création de service
            require __DIR__ . '/../views/service_form.php';
        }
    }
}
?>
