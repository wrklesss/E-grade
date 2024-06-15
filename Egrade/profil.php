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
    <title>Egrade - <?php echo $_SESSION['identifiant']; ?></title>
    <link rel="stylesheet" href="style/profil.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>

<body>
    <?php
        include("header.php");
    ?>
    <main>
        <div class="change-profil">
            <button onclick="history.back()">
                <i class="fa-solid fa-arrow-left"></i> Retour
            </button>
        </div>
        <section class="profil_container">
            <?php
                if($_SESSION['role'] == 'Etudiant') {
                    echo '<div class="numetudiant">';
                        echo '<h3>N° Etudiant : '.$_SESSION['num_etudiant'].'</h3>';
                    echo '</div>';
                }
                    
            ?>

            <div class="info">
                <div class="profil">
                    <svg width="150" height="150" viewBox="0 0 556 556" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M0 112C0 59.2027 0 32.804 16.402 16.402C32.804 0 59.2027 0 112 0H444C496.797 0 523.196 0 539.598 16.402C556 32.804 556 59.2027 556 112V444C556 496.797 556 523.196 539.598 539.598C523.196 556 496.797 556 444 556H112C59.2027 556 32.804 556 16.402 539.598C0 523.196 0 496.797 0 444V112ZM175.85 422.875C205.155 400.389 241.062 388.2 278 388.2C314.939 388.2 350.845 400.389 380.15 422.875C409.456 445.362 430.522 476.89 440.082 512.57C440.225 513.104 439.909 513.652 439.375 513.795C438.842 513.938 438.293 513.621 438.151 513.088C428.704 477.833 407.889 446.681 378.933 424.462C349.977 402.243 314.498 390.2 278 390.2C241.502 390.2 206.023 402.243 177.067 424.462C148.111 446.681 127.296 477.833 117.85 513.088C117.707 513.621 117.158 513.938 116.625 513.795C116.091 513.652 115.775 513.104 115.918 512.57C125.478 476.89 146.545 445.362 175.85 422.875ZM195.6 194.6C195.6 149.092 232.492 112.2 278 112.2C323.508 112.2 360.4 149.092 360.4 194.6C360.4 240.108 323.508 277 278 277C232.492 277 195.6 240.108 195.6 194.6ZM278 110.2C231.387 110.2 193.6 147.987 193.6 194.6C193.6 241.213 231.387 279 278 279C324.613 279 362.4 241.213 362.4 194.6C362.4 147.987 324.613 110.2 278 110.2Z"
                            fill="#222858" />
                    </svg>
                </div>
                <div class="nom_prenom">
                    <?php
                    echo $_SESSION['Nom_prenom'];
                    ?>
                    <p>Adresse mail : <?php echo $_SESSION['email']; ?></p>
                </div>
            </div>
            <div class="profil-footer">
                <h3>Universite Gustave Eiffel</h3>
                <button onclick="window.location.href = 'modifier.php'">Modifier</button>
            </div>
        </section>
    </main>
    <script src="script/header.js"></script>
</body>

</html>