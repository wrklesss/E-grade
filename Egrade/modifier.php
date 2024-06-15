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
    <link rel="stylesheet" href="style/modifier.css">
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

            <form class="form" action="modifier_traitement.php" method="POST">
                <!-- input non modifiable -->
                <?php
                    if($_SESSION['role'] == 'Etudiant') {
                ?>
                <label for="num_etudiant">N° Etudiant :</label>
                <input type="text" id="num_etudiant" name="num_etudiant"
                    value="<?php echo $_SESSION['num_etudiant']; ?>" readonly>

                <?php
                    }
                ?>
                <label for="nom">Nom / Prenom :</label>
                <input type="text" id="nom" name="nom" value="<?php echo $_SESSION['Nom_prenom']; ?>" readonly>

                <label for="email">Email :</label>
                <input type="text" id="email" name="email" value="<?php echo $_SESSION['email']; ?>">

                <label for="password">Mot de passe :</label>
                <div class="password_container">
                    <div class="password_input">
                        <input type="password" id="password" name="password"
                            value="<?php echo $_SESSION['password']; ?>">
                        <button type="button" id="toggle-password" onclick="togglePasswordVisibility()">
                            <i id="eye-icon" class="fas fa-eye"></i>
                        </button>
                    </div>

                    <svg width="139" height="139" viewBox="0 0 139 139" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M34.4292 85.7816C34.4178 85.793 34.4061 85.8046 34.3942 85.8164C34.2421 85.9676 34.0494 86.1591 33.9126 86.4009C33.7757 86.6426 33.7106 86.9063 33.6592 87.1146C33.6545 87.1335 33.65 87.152 33.6455 87.1699L28.1903 108.991C28.1897 108.993 28.189 108.996 28.1883 108.999C28.1861 109.007 28.1839 109.016 28.1816 109.025C28.1447 109.172 28.0937 109.375 28.0762 109.555C28.056 109.761 28.0493 110.213 28.418 110.582L29.1252 109.875L28.418 110.582C28.7868 110.951 29.2388 110.944 29.4455 110.924C29.625 110.906 29.8279 110.855 29.9744 110.818C29.9864 110.815 29.9981 110.813 30.0093 110.81L51.8301 105.354C51.8323 105.354 51.8345 105.353 51.8366 105.353C51.8525 105.349 51.8688 105.345 51.8854 105.341C52.0937 105.289 52.3574 105.224 52.5991 105.087C52.8409 104.951 53.0323 104.758 53.1835 104.606C53.1972 104.592 53.2107 104.579 53.2237 104.565L53.2238 104.565L53.2391 104.55L53.2392 104.55L103.543 54.2463L103.581 54.2079C103.881 53.9081 104.173 53.6167 104.381 53.344C104.615 53.0366 104.836 52.6387 104.836 52.125C104.836 51.6113 104.615 51.2134 104.381 50.906C104.173 50.6333 103.881 50.3419 103.581 50.0421L103.543 50.0037L88.9963 35.4571L88.9578 35.4186C88.658 35.1187 88.3667 34.8272 88.094 34.6192C87.7866 34.3847 87.3887 34.1642 86.875 34.1642C86.3613 34.1642 85.9634 34.3847 85.656 34.6192C85.3833 34.8272 85.092 35.1187 84.7921 35.4186L84.7537 35.4571L34.4346 85.7762C34.4328 85.778 34.431 85.7798 34.4292 85.7816Z"
                            stroke="#33363F" stroke-width="2" />
                        <path d="M72.3958 43.4373L89.7708 31.854L107.146 49.229L95.5625 66.604L72.3958 43.4373Z"
                            fill="#33363F" />
                    </svg>
                </div>
                <div class="profil-footer">
                    <button onclick="window.location.href = 'profil.php'" class="annuler">Annuler</button>
                    <button type="submit" class="modifier">Modifier</button>
                </div>
            </form>

        </section>
    </main>
    <script src="script/header.js"></script>
    <script src="script/co.js"></script>
</body>

</html>