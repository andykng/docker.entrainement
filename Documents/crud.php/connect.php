<?php
// Informations de connexion à la base de données
$servername = "localhost"; // Nom du serveur MySQL
$username = "root"; // Nom d'utilisateur MySQL
$password = "root"; // Mot de passe MySQL
$dbname = "php_crud_app"; // Nom de la base de données

// Connexion à la base de données
$con = mysqli_connect($servername, $username, $password, $dbname);

// Vérifier la connexion
if (!$con) {
    die("La connexion à la base de données a échoué: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Section d'inscription -->
    <div class="container">
        <h2>Inscription</h2>
        <form action="inscription.php" method="post">
            <label for="firstname">Prénom:</label>
            <input type="text" id="firstname" name="firstname" required>

            <label for="lastname">Nom de famille:</label>
            <input type="text" id="lastname" name="lastname" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="username">Nom d'utilisateur:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Mot de passe:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">S'inscrire</button>
        </form>
        
        <p>Déjà un compte? <a href="connexion.php">Connectez-vous ici</a>.</p>
    </div>

    <!-- Connexion à la base de données -->
    <?php
    // Connexion à la base de données (répétition inutile)
    $con = mysqli_connect('localhost', 'root', 'root');
    if (!$con) {
        die("database connection failed" . mysqli_error($con));
    }

    $select_db = mysqli_select_db($con, 'php_crud_app');
    if (!$select_db) {
        die("database selected failed" . mysqli_error($con));
    }
    ?>

</body>
</html>
