<html>
    <head>
        <title>Liste des exposants</title>
    </head>
    <body>
    <?php
    include 'connexion.php';
    include 'class_festival.php'; 
    $exposant = new exposant(); 
    $exposants = $exposant->findAll($pdo);
        ?>
        <h1>Liste des exposants</h1>
        <a href="exposant_form.php?action=new">Ajouter un exposant</a>
        <table border="1" cellpadding="5" cellspacing="0">
            <thread>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Spécialité</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thread>
            <tbody>
                <?php foreach ($exposants as $e): ?>
                    <tr>
                        <td><?= $e['id_exposant'] ?></td>
                        <td><?= $e['nom'] ?></td>
                        <td><?= $e['specialite'] ?></td>
                        <td><?= $e['email'] ?></td>
                        <td>
                            <a href="exposant_form.php?action=edit&id=<?= $e['id_exposant'] ?>">Modifier</a>
                            <a href="exposant_delete.php?id=<?= $e['id_exposant'] ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet exposant ?');">Supprimer</a>
                        </td>
                <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>