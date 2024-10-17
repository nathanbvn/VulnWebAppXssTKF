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
    <title>Boutique Informatique</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 2.5em;
        }

        nav {
            text-align: center;
            margin: 20px 0;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-size: 1.2em;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 40px;
        }

        .products {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .product {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin: 15px;
            padding: 20px;
            text-align: center;
        }

        .product img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .product h3 {
            font-size: 1.5em;
            color: #333;
            margin: 15px 0;
        }

        .product p {
            color: #666;
            margin: 10px 0;
        }

        .product button {
            background-color: #5cb85c;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
        }

        .product button:hover {
            background-color: #4cae4c;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        footer p {
            margin: 0;
            font-size: 0.9em;
        }

    </style>
</head>
<body>

<header>
    <h1>Bienvenue, <?php echo htmlspecialchars($username); ?> à la Boutique Informatique</h1>
    <nav>
        <a href="/forum.php">Forum</a>
        <a href="/login.php">Déconnexion</a>
        <?php if ($username === 'admin') : ?>
            <a href="bdd.php">BDD</a> 
        <?php endif; ?>
    </nav>
</header>

<div class="container">
    <h2>Nos Produits</h2>
    <div class="products">
        <div class="product">
            <img src="https://www.bfmtv.com/comparateur/wp-content/uploads/2024/04/Definition-dune-souris-gamer.jpg" alt="Souris Gamer">
            <h3>Souris Gamer RGB</h3>
            <p>Une souris haute précision avec éclairage RGB pour une expérience de jeu ultime.</p>
            <button>Ajouter au panier</button>
        </div>

        <div class="product">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRpinFlRfH18zEhtwDRjMO_wsddPRp5WbIF6w&s" alt="Clavier Mécanique">
            <h3>Clavier Mécanique</h3>
            <p>Un clavier mécanique ultra réactif pour des sessions de gaming inégalées.</p>
            <button>Ajouter au panier</button>
        </div>

        <div class="product">
            <img src="https://m.media-amazon.com/images/I/81qgzdW8UkL.jpg" alt="Casque Gamer">
            <h3>Casque Gamer Surround</h3>
            <p>Un casque surround 7.1 offrant une immersion totale dans le jeu.</p>
            <button>Ajouter au panier</button>
        </div>
    </div>
</div>

</body>
</html>
