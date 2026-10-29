<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des étudiants</title>
</head>
<body>
    <h1>Liste des étudiants</h1>

    <?php
    $etudiants = [
        ["Prenom" => "Aya","nom" => "Ait lahrach", "filiere" => "Master_ISI"],
        ["Prenom" => "Wissam","nom" => "Rafik", "filiere" => "Master_ISI"],
        ["Prenom" => "Chaymae","nom" => "Lahmama", "filiere" => "Master_ISI"],
        ["Prenom" => "Razan","nom" => "Barki", "filiere" => "Master_ISI"]
    ];
    ?>

    <table border="1">
        <tr>
            <th>Nom</th>
            <th>Filière</th>
        </tr>

        <?php foreach ($etudiants as $etudiant): ?>
        <tr>
            <td><?= htmlspecialchars($etudiant["Prenom"]) ?></td>
            <td><?= htmlspecialchars($etudiant["nom"]) ?></td>
            <td><?= htmlspecialchars($etudiant["filiere"]) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>