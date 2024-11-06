<?php
// controllers/AccountController.php
require_once __DIR__ . '/../models/Account.php';
require_once __DIR__ . '/../models/Platform.php';

class AccountController {
    public function list() {
        // Récupère tous les comptes et toutes les plateformes
        $accounts = Account::getAll();
        $platforms = Platform::getAll();
        require __DIR__ . '/../views/account_list.php';
    }

    public function add() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Récupère les données du formulaire et ajoute un nouveau compte
            $platform_id = $_POST['platform_id'];
            $email = $_POST['email'];
            Account::add($platform_id, $email);
            // Redirection vers la liste des comptes pour rafraîchir la page
            header("Location: /gestion_abonnements/index.php?action=list_accounts");
            exit();
        }
    }
}
?>
