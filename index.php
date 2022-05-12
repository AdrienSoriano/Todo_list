<?php
include 'logins/login.php';

$showAll = "SELECT taches.nom, statut.nom_du_statut, statut.url_image FROM taches INNER JOIN statut ON taches.id_statut = statut.id;";
$showFinished = "SELECT taches.nom, statut.nom_du_statut, statut.url_image FROM taches INNER JOIN statut ON taches.id_statut = statut.id WHERE taches.id_statut = 2;";
$showUnfinished = "SELECT taches.nom, statut.nom_du_statut, statut.url_image FROM taches INNER JOIN statut ON taches.id_statut = statut.id WHERE taches.id_statut = 1";

/* $all = $_POST['all'];
$finished = $_POST['finished'];
$unfinished = $_POST['unfinished'];
$status = $_POST['statut']; */
try{
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $stmt1 = $conn->query($showAll);
    $stmt2 = $conn->query($showFinished);
    $stmt3 = $conn->query($showUnfinished);
?>
<!DOCTYPE html>
<html lang="FR-fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="Assets/Media/validation.png" type="image/x-icon">
    <!-- Font : Outfit -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/ae29616080.js" crossorigin="anonymous"></script>
    <title>Todo list</title>
</head>
<body>
<main>
    <header>
        <h1>À Faire</h1>
    </header>
    <section>
        <div>
            <span class="checklist"></span>
            <input type="text" placeholder="Ajoutez une tâche">
        </div>
        <ol>
            <?php while($row = $stmt1->fetch(PDO::FETCH_ASSOC)) : ?>
            <li><img src="<?php echo htmlspecialchars($row['url_image']); ?>"><p><?php echo htmlspecialchars($row['nom']); ?></p></li>
            <?php endwhile; ?>
            <?php while($row = $stmt2->fetch(PDO::FETCH_ASSOC)) : ?>
            <li><img src="<?php echo htmlspecialchars($row['url_image']); ?>"><p><?php echo htmlspecialchars($row['nom']); ?></p></li>
            <?php endwhile; ?>
            <?php while($row = $stmt3->fetch(PDO::FETCH_ASSOC)) : ?>
            <li><img src="<?php echo htmlspecialchars($row['url_image']); ?>"><p><?php echo htmlspecialchars($row['nom']); ?></p></li>
            <?php endwhile; ?>
        </ol>
    </section>
    <section>
        <div>
            <p>5 tâches restantes</p>
        </div>
        <div>
            <button name="all">Toutes</button>
            <button name="unfinished">En cours</button>
            <button name="finished">Finies</button>
        </div>
    </section>
</main>
<footer>
    <p>2022 - Made with <i class="fa-solid fa-heart"></i></p>
</footer>
<script src="app.js"></script>
</body>
</html>

<?php

if($stmt1 === false){
  die("Erreur");
 }
 
}catch (PDOException $e){
  die("Impossible de se connecter à la base de données $dbname :" . $e->getMessage());
}

?>