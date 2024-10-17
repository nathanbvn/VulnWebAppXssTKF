<?php
// Définir le chemin du fichier de log
$log_file = __DIR__ . '/../logs/server.log';

// Traitement du formulaire de soumission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données soumises
    $new_logs = $_POST['logs'];

    // Sauvegarder les nouveaux logs dans le fichier
    file_put_contents($log_file, $new_logs);
}

// Vérifier si le fichier existe et lire son contenu
$logs = file_exists($log_file) ? file_get_contents($log_file) : "Aucun log disponible.";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Édition des Logs du serveur</title>
    <style>
        textarea {
            width: 100%;
            height: 400px;
            font-family: monospace;
        }
        button {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h1>Éditer les Logs du serveur PHP</h1>
    <form method="post">
        <!-- Textarea qui contient les logs, éditable -->
        <textarea name="logs"><?php echo htmlspecialchars($logs); ?></textarea>
        <br>
        <!-- Bouton pour soumettre les modifications -->
        <button type="submit">Enregistrer les modifications</button>
    </form>
</body>
</html>
