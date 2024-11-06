<?php
// controllers/PlatformController.php
require_once __DIR__ . '/../models/Platform.php';

class PlatformController {
    public function list() {
        // Récupère toutes les plateformes et affiche la liste
        $platforms = Platform::getAll();
        require __DIR__ . '/../views/platform_list.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Récupère les données du formulaire et ajoute une nouvelle plateforme
            $platform_name = $_POST['platform_name'];
            Platform::add($platform_name);
            header("Location: /gestion_abonnements/index.php?action=list_platforms");
        } else {
            // Affiche le formulaire de création de plateforme
            require __DIR__ . '/../views/platform_form.php';
        }
    }
}
?>
