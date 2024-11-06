<!-- views/service_list.php -->
<h2>Liste des Services</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Nom du service</th>
        <th>Abonnés maximum</th>
        <th>Revenu par abonné (€)</th>
    </tr>
    <?php foreach ($services as $service): ?>
    <tr>
        <td><?= htmlspecialchars($service['service_id']) ?></td>
        <td><?= htmlspecialchars($service['service_name']) ?></td>
        <td><?= htmlspecialchars($service['max_subscribers']) ?></td>
        <td><?= htmlspecialchars($service['revenue_per_subscriber']) ?> €</td>
    </tr>
    <?php endforeach; ?>
</table>
