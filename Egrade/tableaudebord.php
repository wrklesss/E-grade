<section class="dashboard">
    <div class="dashboard-item">
        <h3>Tableau de bord</h3>
        <div class="stats">
            <div class="stat">
                <?php
                            include("connexion.inc.php");
                            $result = $pdo->query('SELECT * FROM etudiants');
                            $nb_etud = $result->rowCount();
                            
                            echo'<span>' . $nb_etud . ' étudiants' . '</span>';
                        ?>
                <!-- <span> étudiants</span> -->
            </div>
            <!-- <div class="lane"></div> -->
            <div class="stat">
                <div class="stat_content">
                    <span>24 Cours créés</span>
                    <small>8 Fermé</small>
                </div>

            </div>
            <!-- <div class="lane"></div> -->
            <div class="stat">
                <div class="stat_content">
                    <span>120 Notes entrée</span>
                    <small>14 En cours</small>
                </div>

            </div>
            <!-- <div class="lane"></div> -->
            <div class="stat">
                <?php
                            include("connexion.inc.php");
                            $result = $pdo->query('SELECT * FROM dashboard_professeur');
                            $nb_mod = $result->rowCount();
                            
                            echo'<span>' . $nb_mod . ' Modules' . '</span>';
                        ?>
                <!-- <span>120 Modules</span> -->
            </div>
        </div>
    </div>
</section>