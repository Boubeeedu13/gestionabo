<!-- views/service_form.php -->
<h2>Ajouter un Service</h2>
<form method="post" action="index.php?action=create_service">
    <label>Nom du service :</label>
    <input type="text" name="service_name" required>
    <br>
    <label>Abonnés maximum :</label>
    <input type="number" name="max_subscribers" required>
    <br>
    <label>Revenu par abonné (€) :</label>
    <input type="number" step="0.01" name="revenue_per_subscriber" required>
    <br>
    <input type="submit" value="Ajouter">
</form>
