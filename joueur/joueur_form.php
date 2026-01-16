<doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Joueur Form</title>
        <?php
        include 'connexion.php';
        include 'class_joueur.php';
        $joueur = null;
        if (isset($_GET['action']) && $_GET['action'] === 'edit' && isset($_GET['id'])) {
            $joueurObj = new joueur();
            $joueur = $joueurObj->findById($_GET['id'], $pdo);
        }
        ?>
        <body>
            <h1><?= $joueur ? 'Modifier' : 'Créer' ?> joueur</h1>
            <form action="<?= $joueur ? 'joueur_modifier.php' : 'joueur_creer.php' ?>" method="post">
                <label for="pseudo">pseudo</label>
                <input type="text" id="pseudo" name="pseudo" value="<?= $joueur['pseudo'] ?? '' ?>" required><br><br>

                <label for="age">age:</label>
                <input type="age" id="age" name="age" value="<?= $joueur['age'] ?? '' ?>" required><br><br>

                <label for="ville">Ville:</label>
                <input type="text" id="ville" name="ville" value="<?= $joueur['ville'] ?? '' ?>" required><br><br>
                <input type="hidden" name="id" value="<?= $joueur['id_joueur'] ?? '' ?>">

                <button type="submit"><?= $joueur ? 'Enregistrer' : 'Créer' ?></button>
                <a href="joueur_list.php">
                    <button type="button">Annuler</button>
                </a>
            </form>
        </body>
    </head>
</html>