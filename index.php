<?php
include 'logins/connect.php';
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
            <li><span class="checklist"></span><p>Finir le portfolio</p></li>
            <li><span class="checklist"></span><p>Faire des biscuits</p></li>
            <li><span class="checklist"></span><p>Trouver un stage</p></li>
            <li><span class="checklist"></span><p>Lire la doc php</p></li>
            <li><span class="checklist"></span><p>Créer un README</p></li>
            <li><span class="checklist"></span><p>Arriver à l'heure (Loïc)</p></li>
        </ol>
    </section>
    <section>
        <div>
            <p>5 tâches restantes</p>
        </div>
        <div>
            <button>Toutes</button>
            <button>En cours</button>
            <button>Finies</button>
        </div>
    </section>
</main>
<footer>
    <p>2022 - Made with <i class="fa-solid fa-heart"></i></p>
</footer>
<script src="app.js"></script>
</body>
</html>