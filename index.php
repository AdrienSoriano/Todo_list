<?php
?>
<!DOCTYPE html>
<html lang="FR-fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
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
            <input type="radio">
            <input type="text" placeholder="Ajoutez une tâche">
        </div>
        <ol>
            <li><input type="radio"> Finir le portfolio</li>
            <li><input type="radio"> Faire des biscuits</li>
            <li><input type="radio"> Trouver un stage</li>
            <li><input type="radio"> Lire la doc php</li>
            <li><input type="radio"> Créer un README</li>
            <li><input type="radio"> Arriver à l'heure (Loïc)</li>
        </ol>
        <p>5 tâches restantes</p>
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