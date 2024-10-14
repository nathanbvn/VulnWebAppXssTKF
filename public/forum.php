<?php
session_start(); 


if (!isset($_SESSION['username'])) {
    header('Location: login.php'); 
    exit();
}

$username = $_SESSION['username']; 
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum Question/Réponse avec l'admin !</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        form {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 500px;
            margin: 0 auto;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        input[type="text"] {
            width: 90%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #5cb85c;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #4cae4c;
        }

        h2 {
            color: #333;
            margin-top: 30px;
        }

        p {
            background-color: #e9ecef;
            padding: 10px;
            border-radius: 5px;
            margin-top: 10px;
        }
        nav {
            text-align: center;
            margin: 20px 0;
        }

        nav a {
            color: black;
            text-decoration: none;
            margin: 0 15px;
            font-size: 1.2em;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
    </style>
</head>
<body>
    <h1>Forum Question/Réponse avec l'admin !</h1>
    <nav>
        <a href="/home.php">Home</a>
        <a href="/login.php">Déconnexion</a>
        <?php if ($username === 'admin') : ?>
            <a href="bdd.php">BDD</a> 
        <?php endif; ?>
    </nav>
    <form method="POST" action="">
        <label for="commentaire">Entrez votre question :</label><br>
        <input type="text" name="commentaire" id="commentaire" placeholder="Votre question"><br><br>
        <input type="submit" value="Soumettre">
    </form>

    <?php
    $fichier = 'commentaires.txt';

    if (!empty($_POST['commentaire'])) {
        $commentaire = $_POST['commentaire']; 
        file_put_contents($fichier, $commentaire . "\n", FILE_APPEND);
    }

    if (file_exists($fichier)) {
        echo "<h2>Commentaires :</h2>";
        $commentaires = file($fichier, FILE_IGNORE_NEW_LINES);
        foreach ($commentaires as $com) {
            echo "<p>" . $com . "</p>"; 
        }
    }
    ?>
</body>
</html>
