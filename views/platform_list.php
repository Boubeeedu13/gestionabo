<!-- views/platform_list.php -->
<h2>Liste des Plateformes</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Nom de la plateforme</th>
    </tr>
    <?php foreach ($platforms as $platform): ?>
    <tr>
        <td><?= htmlspecialchars($platform['platform_id']) ?></td>
        <td><?= htmlspecialchars($platform['platform_name']) ?></td>
    </tr>
    <?php endforeach; ?>
</table>
