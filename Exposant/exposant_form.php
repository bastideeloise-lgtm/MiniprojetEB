<doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exposant Form</title>
        <?php
        if ($_GET["action"] =="new") {
            $exposant = null;
        } else {
            include 'connexion.php';
            include 'class_festival.php';
            $model = new exposant();
            $id = (int)($_GET['id'] ?? 0);
            $exposant = $model->findById($id,$pdo);
        }
        ?>
        <body>
            <h1><?= $exposant ? 'Modifier' : 'Créer' ?> exposant</h1>
            <form method="POST" action="<?= $exposant ? 'exposant_modifie.php' : 'exposant_creer.php' ?>">
                <label for="nom">Nom:</label>
                <input type="text" id="nom" name="nom" value="<?= $exposant['nom'] ?? '' ?>" required><br><br>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?= $exposant['email'] ?? '' ?>" required><br><br>

                <label for="specialite">Specialité:</label>
                <input type="text" id="specialite" name="specialite" value="<?= $exposant['specialite'] ?? '' ?>" required><br><br>
                <input type="hidden" name="id" value="<?= $exposant['id_exposant'] ?? '' ?>">
                <button type="submit"><?= $exposant ? 'Enregistrer' : 'Créer' ?></button>
                <a href="exposant_list.php">
                    <button type="button">Annuler</button>
                </a>

            </form>
        </body>
    </head>
</html>