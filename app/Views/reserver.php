test reservation evenement N°<?= $idEvenement ?>
<form action="<?= site_url('create-reservation') ?>" method="post">
    <input type="hidden" name="id_evenement" value="<?= $idEvenement ?>" required><br><br>

    <label>Nom:</label><br>
    <input type="text" name="nom_client" required><br><br>

    <label>Prénom:</label><br>
    <input type="text" name="prenom_client" required><br><br>

    <label>Email:</label><br>
    <input type="text" name="email" required><br><br>

    <label>Telephone:</label><br>
    <input type="text" name="telephone" required><br><br>

    <label>Nombre de personne:</label><br>
    <input type="number" name="nombre_personnes" required /><br><br>

    <button type="submit">Reserver</button>
</form>