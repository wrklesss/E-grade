<header>
    <div class="menu" id="menu">
        <i class="fi fi-br-bars-sort"></i>
        <h3>Menu</h3>
    </div>
    <div class="hidden menu_icon" id="menu_icon">
        <img src="img/menu/x.png" alt="" />
        <h3>FERMER</h3>
    </div>
    <div class="title-container">
        <div class="logo-container" onclick="window.location.href = 'dashboard.php'">
            <img src="img/logo.png" alt="logo" />
            <h1>UNIVERSITÉ GUSTAVE EIFFEL</h1>
        </div>
        <div class="name">
            <h4>
                <?php
                    echo $_SESSION['role'];
                ?> :
            </h4>
            <h3>
                <?php
					echo $_SESSION['Nom_prenom']; 
				?>
            </h3>
        </div>
    </div>
    <div class="profil-container">
        <button class="notif">
            <img src="img/profil_container/bell.png" alt="" />
        </button>
        <button class="user" onclick="window.location.href = 'profil.php'">
            <img src="img/profil_container/User_cicrle.png" alt="" />
        </button>
        <!-- <button class="info"><i class="fa-solid fa-v"></i></button> -->
    </div>
</header>

<div class="header_bottom">

    <img src="img/profil_container/Subtract.png" alt="">

    <div class="bonjour">
        <h3>
            Bonjour, <span class="identifiant_bottom"><?php echo $_SESSION['Nom_prenom']; ?></span>
        </h3>
    </div>
</div>

<div class=" menu-side" id="menu-side">
    <div class="name_menu">
        <h3><?php echo $_SESSION['Nom_prenom']; ?></h3>

        <button onclick="window.location.href = 'deconnection.php'">
            <img src="img/menu/deconnection.png" alt="" />
        </button>

        <button onclick="window.location.href = 'settings.php'">
            <img src="img/menu/settings.png" alt="" />
        </button>
    </div>

    <section class="menu_container">
        <section class="menu_content">
            <div class="icon-side" id="icon-side" onclick="window.location.href = 'dashboard.php'">
                <div class="icon">
                    <img src="img/menu/accueil-icon.png" alt="" />
                </div>
                <h3>Accueil</h3>
            </div>
        </section>
        <?php
            if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'Enseignant') {

        ?>
        <section class="Modules menu_content" id="Modules menu_content">
            <div class="icon-side" id="icon-side" onclick="window.location.href = 'dashboard.php'">
                <div class="icon">
                    <img src="img/menu/modules-icon.png" alt="" />
                </div>
                <h3>Modules</h3>
            </div>
            <section class="module_plus menu_plus" id="menu_plus">
                <div class="menu_plus_content">
                    <li><a href="mise">- Mise à jours</a></li>
                    <li><a href="dashboard.php">- Voir Module(s)</a></li>
                </div>
            </section>
        </section>

        <section class="Evaluations menu_content" id="menu_content">
            <div class="icon-side" id="icon-side" onclick="window.location.href = 'evaluations.html'">
                <div class="icon">
                    <img src="img/menu/evaluations-icon.png" alt="" />
                </div>
                <h3>Evaluations</h3>
            </div>

            <section class="eval_plus menu_plus" id="menu_plus">
                <div class="menu_plus_content">
                    <li><a href="">- Mise à jours</a></li>
                    <li><a href="">- Saisie evaluations</a></li>
                    <li><a href="">- Evaluations recentes</a></li>
                </div>
            </section>
        </section>

        <section class="Etudiants menu_content" id="menu_content">
            <div class="icon-side" id="icon-side" onclick="window.location.href = 'etudiant.html'">
                <div class="icon">
                    <img src="img/menu/etudiants-icon.png" alt="" />
                </div>
                <h3>Etudiants</h3>
            </div>

            <section class="etud_plus menu_plus" id="menu_plus">
                <div class="menu_plus_content">
                    <li><a href="">- Consultation</a></li>
                </div>
            </section>
        </section>

        <?php
            }
        ?>
    </section>
</div>