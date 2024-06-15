<?php
    $pdo = new PDO('mysql:host=10.2.0.5;dbname=charly.janvier_db', 'charly.janvier', 'wesly97114');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>