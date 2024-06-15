<?php
    session_start();

    if (!isset($_SESSION['identifiant'])) {
        header('Location: index.php');
        exit;
    }

    // Include the database connection file
    require 'connexion.inc.php';

    // Retrieve form data
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashed_password = md5($password); // Secure password hashing

    // Update email and password in the database
    $identifiant = $_SESSION['identifiant'];
    $role = $_SESSION['role'];

    $table = '';

    if ($role == 'Etudiant') {
        $table = 'etudiants';
    } elseif ($role == 'Enseignant') {
        $table = 'enseignant';
    } else {
        $table = 'admin';
    }

    try {
        $sql = "UPDATE $table SET mail = :email, mot_de_passe = :hashed_password WHERE identifiant = :identifiant";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':hashed_password', $hashed_password);
        $stmt->bindParam(':identifiant', $identifiant);

        if ($stmt->execute()) {
            // Update session variables
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            echo '<script>alert("Vos informations ont bien été mises à jour.")</script>';
            sleep(2);
            header('Location: profil.php?success=1');

        } else {
            echo "Error updating record.";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
?>