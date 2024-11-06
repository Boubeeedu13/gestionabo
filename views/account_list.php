<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Comptes</title>
    <style>
        /* Style de base pour le corps de la page */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 20px;
        }

        /* Titre principal */
        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        /* Style pour le tableau */
        table {
            width: 60%;
            border-collapse: collapse;
            margin-top: 10px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* En-têtes du tableau */
        th {
            background-color: #007bff;
            color: #ffffff;
            padding: 10px;
            text-align: left;
            font-size: 16px;
        }

        /* Lignes du tableau */
        td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            color: #555;
        }

        /* Lignes alternées */
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        /* Style pour les boutons d'action */
        .action-buttons {
            margin-top: 20px;
        }

        /* Style pour le formulaire */
        .add-form {
            width: 60%;
            background-color: #ffffff;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            border-radius: 5px;
        }
        .add-form label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
            color: #333;
        }
        .add-form input[type="text"], .add-form select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .add-form button {
            padding: 10px 15px;
            color: #ffffff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .add-form button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<h1>Liste des Comptes</h1>

<!-- Tableau des comptes -->
<table>
    <tr>
        <th>Email</th>
        <th>Plateforme</th>
    </tr>
    <?php foreach ($accounts as $account): ?>
        <tr>
            <td><?php echo htmlspecialchars($account['email']); ?></td>
            <td><?php echo htmlspecialchars($account['platform_name']); ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<!-- Formulaire pour ajouter un nouveau compte -->
<div class="add-form">
    <h2>Ajouter un Nouveau Compte</h2>
    <form action="/gestion_abonnements/index.php?action=add_account" method="post">
        <label for="email">Email :</label>
        <input type="text" id="email" name="email" required>

        <label for="platform_id">Plateforme :</label>
        <select id="platform_id" name="platform_id" required>
            <?php foreach ($platforms as $platform): ?>
                <option value="<?php echo $platform['id']; ?>"><?php echo htmlspecialchars($platform['name']); ?></option>
            <?php endforeach; ?>
        </select>

        <button type="submit">Ajouter</button>
    </form>
</div>

</body>
</html>
