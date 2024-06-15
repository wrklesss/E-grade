<?php
    if (isset($_POST['identifiant']) && isset($_POST['password'])) {
        $identifiant = $_POST['identifiant'];
        $password = $_POST['password'];

        $md5 = md5($password);

        try {
            // Connexion à la base de données
            include("connexion.inc.php");

            // Préparer la requête SQL
            $requete = $pdo->prepare('SELECT * FROM admin WHERE identifiant = :identifiant AND mot_de_passe = :mot_de_passe');
            $requete->bindParam(':identifiant', $identifiant);
            $requete->bindParam(':mot_de_passe', $md5);
            $requete->execute();

            // Vérifier si un utilisateur est trouvé
            if ($requete->rowCount() > 0) {
                session_start();
                $_SESSION['identifiant'] = $identifiant;
                $row = $requete->fetch();
                
                $_SESSION['role'] = $row['role'];
                $_SESSION['Nom_prenom'] = $row['Nom_prenom'];
                $_SESSION['email'] = $row['mail'];
                $_SESSION['password'] = $_POST['password'];
                header('Location: admin.php');
            } else {
                echo 'Identifiant incorrect';
            }
        } catch (PDOException $e) {
            echo 'Erreur de connexion : ' . $e->getMessage();
        }
    } else {
        echo 'Veuillez remplir tous les champs';
    }
?>