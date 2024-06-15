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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/dashbord.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet"
        href="https://cdn-uicons.flaticon.com/2.4.0/uicons-bold-rounded/css/uicons-bold-rounded.css" />
    <title>Egrade</title>
</head>

<body>
    <?php
        include("header.php");
    ?>
    <main>
        <div class="title">
            <h1>Tableau de bord</h1>
            <p>Vue d'ensemble des cours</p>
        </div>
        <section class="dashboard">
            <div class="search-container">
                <select name="filter" id="filter" class="filter">
                    <option value="tout">Tout</option>
                    <option value="SAE">SAE</option>
                    <option value="">SIO</option>
                </select>
                <div class="search-bar">
                    <input type="text" placeholder="Rechercher" />
                    <button class="search-btn"><i class="fas fa-search"></i></button>
                </div>
            </div>

            <!-- <div class="cards-container">
                <section class="card" onclick="window.location.href = 'module.php'">
                    <div class="card-icon">
                        <img src="img/matiere/hébergement.png" alt="">
                    </div>
                    <div class="card-info">
                        <h3>[R113] Hébergement - S1</h3>
                        <p>2023/2024</p>
                    </div>
                </section>
                <section class="card">
                    <div class="card-icon">
                        <img src="img/matiere/Ergonomie.png" alt="">
                    </div>
                    <div class="card-info">
                        <h3>[R103] Ergonomie&Accessibilité - S1</h3>
                        <p>2023/2024</p>
                    </div>
                </section>
                <section class="card">
                    <div class="card-icon">
                        <img src="img/matiere/audiovisual.png" alt="">
                    </div>
                    <div class="card-info">
                        <h3>[R110] AUDIOVISUEL - S1</h3>
                        <p>2023/2024</p>
                    </div>
                </section>
                <section class="card">
                    <div class="card-icon">
                        <img src="img/matiere/representation.png" alt="">
                    </div>
                    <div class="card-info">
                        <h3>[R114] Représentation et....</h3>
                        <p>2023/2024</p>
                    </div>
                </section>
                <section class="card">
                    <div class="card-icon">
                        <img src="img/matiere/devweb.png" alt="">
                    </div>
                    <div class="card-info">
                        <h3>[R213] DEVELOPPEMENT WEB - S1</h3>
                        <p>2023/2024</p>
                    </div>
                </section>
            </div> -->
            <!-- en php -->
            <?php
                include("connexion.inc.php");

                $requete = $pdo->prepare('SELECT * FROM dashboard_professeur');
                $requete->execute();
                echo '<div class="cards-container">';
                    while ($row = $requete->fetch()) {
                        echo '<section class="card">';
                            echo '<div class="card-icon">';
                                echo '<img src="img/matiere/' . $row['image']. '.png' . '" alt="">';
                            echo '</div>';
                            echo '<div class="card-info">';
                                echo '<h3>' . $row['nom_cours'] . '</h3>';
                                echo '<p>' . $row['date'] . '</p>';
                            echo '</div>';
                        echo '</section>';
                    }
                
            ?>
            <section class="card">
                <div class="card-icon">
                    <img src="img/matiere/devweb.png" alt="">
                </div>
                <div class="card-info">
                    <h3>[R213] DEVELOPPEMENT WEB - S1</h3>
                    <p>2023/2024</p>
                </div>
            </section>
            <?php
                echo '</div>';
            ?>
            <div class="dashboard-footer">
                <a href="#">Aucun cours</a>
            </div>
        </section>
    </main>
    <script src="script/header.js"></script>
    <script src="script/co.js"></script>
</body>

</html>