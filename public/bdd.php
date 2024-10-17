<?php
session_start();


if (!isset($_SESSION['username']) || $_SESSION['username'] !== 'admin') {
    header('Location: login.php'); 
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base de Données - Utilisateurs</title>
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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 40px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #333;
            color: white;
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

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        footer {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Base de Données - Utilisateurs</h1>
    <nav>
        <a href="/forum.php">Forum</a>
        <a href="/home.php">Home</a>
        <a href="/login.php">Deconnexion</a>
    </nav>

    <h2>Utilisateurs</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nom d'utilisateur</th>
            <th>Mot de passe</th>
        </tr>
        <tr>
            <td>0</td>
            <td>admin</td>
            <td><?php echo md5('abc123'); ?></td>
        </tr>

        <tr>
            <td>1</td>
            <td>jean1D</td>
            <td><?php echo md5('password1'); ?></td>
        </tr>
        <tr>
            <td>2</td>
            <td>mart75</td>
            <td><?php echo md5('password2'); ?></td>
        </tr>
        <tr>
            <td>3</td>
            <td>merlinnnnOr</td>
            <td><?php echo md5('password3'); ?></td>
        </tr>
        <tr>
            <td>4</td>
            <td>yessir78</td>
            <td><?php echo md5('password4'); ?></td>
        </tr>
        <tr>
            <td>5</td>
            <td>mariemarie</td>
            <td><?php echo md5('password5'); ?></td>
        </tr>
        <tr>
            <td>6</td>
            <td>user</td>
            <td><?php echo md5('user'); ?></td>
        </tr>
    </table>

    <h2>Informations Clients</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nom d'utilisateur</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Adresse</th>
            <th>Numéro de téléphone</th>
        </tr>
        <tr>
            <td>1</td>
            <td>jean1D</td>
            <td>Dupont</td>
            <td>Jean</td>
            <td>10 rue de Paris, 75001 Paris</td>
            <td>0123456789</td>
        </tr>
        <tr>
            <td>2</td>
            <td>mart75</td>
            <td>Martin</td>
            <td>Claire</td>
            <td>20 avenue de la République, 75011 Paris</td>
            <td>0987654321</td>
        </tr>
        <tr>
            <td>3</td>
            <td>merlinnnnOr</td>
            <td>Leroy</td>
            <td>Paul</td>
            <td>30 boulevard Saint-Michel, 75005 Paris</td>
            <td>0147258396</td>
        </tr>
        <tr>
            <td>4</td>
            <td>yessir78</td>
            <td>Moreau</td>
            <td>Sophie</td>
            <td>40 rue de Lyon, 75012 Paris</td>
            <td>0163847295</td>
        </tr>
        <tr>
            <td>5</td>
            <td>mariemarie</td>
            <td>Petit</td>
            <td>Marie</td>
            <td>50 avenue des Champs-Élysées, 75008 Paris</td>
            <td>0175820347</td>
        </tr>
    </table>
</div>


</body>
</html>
