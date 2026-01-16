<html>
    <head>
        <title>Liste des Joueur</title>
    </head>
    <body>
    <?php
    include 'connexion.php';
    include 'class_joueur.php'; 
    $joueur = new joueur(); 
    $joueurs = $joueur->findAll($pdo);
        ?>
        <h1>Liste des joueurs</h1>
        <a href="joueur_form.php?action=new">Ajouter un joueur</a>
        <table border="1" cellpadding="5" cellspacing="0">
            <thread>
                <tr>
                    <th>ID</th>
                    <th>Pseudo</th>
                    <th>Age</th>
                    <th>Ville</th>
                    <th>Actions</th>
                </tr>
            </thread>
            <tbody>
                <?php foreach ($joueurs as $j): ?>
                    <tr>
                        <td><?= $j['id_joueur'] ?></td>
                        <td><?= $j['pseudo'] ?></td>
                        <td><?= $j['age'] ?></td>
                        <td><?= $j['ville'] ?></td>
                        <td>
                            <a href="joueur_form.php?action=edit&id=<?= $j['id_joueur'] ?>">Modifier</a>
                            <a href="joueur_delete.php?id=<?= $j['id_joueur'] ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce joueur ?');">Supprimer</a>
                        </td>
                <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>