<!-- views/account_form.php -->
<h2>Ajouter un Compte</h2>
<form method="post" action="index.php?action=create_account">
    <label>Plateforme ID :</label>
    <input type="number" name="platform_id" required>
    <br>
    <label>Email :</label>
    <input type="email" name="email" required>
    <br>
    <input type="submit" value="Ajouter">
</form>
