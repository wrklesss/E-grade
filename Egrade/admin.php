<?php
    session_start();
    if (!isset($_SESSION['identifiant'])) {
        header('Location: index.php');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tableau de bord</title>
    <link rel="stylesheet" href="style/adminacceuil.css" />
    <link rel="stylesheet" href="style/header.css" />
    <link rel="stylesheet" href="style/style.css" />
</head>

<body>
    <?php
        include("header.php");
    ?>
    <main>
        <?php
            include("tableaudebord.php");
        ?>
        <section class="lists">
            <div class="list-item">
                <h3>Liste des étudiants</h3>
                <a class="consult-btn" href="Leleve.php"><img src="img/consulter.png" alt=""> Consulter </a>
            </div>
            <div class="list-item">
                <h3>Listes des enseignants</h3>
                <a class="consult-btn" href="Lenseig.php"><img src="img/consulter.png" alt=""> Consulter </a>
            </div>
            <div class="list-item">
                <h3>Modules</h3>
                <a class="consult-btn" href=""><img src="img/consulter.png" alt=""> Consulter</a>
            </div>
        </section>
    </main>
    <script src="script/header.js"></script>

</body>

</html>