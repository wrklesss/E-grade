<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Tableau de bord</title>
    <link rel="stylesheet" href="style/adminacceuil.css" />
    <link rel="stylesheet" href="style/stylelist.css" />
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
        <div class="container">
            <h1>Liste des étudiants</h1>
            <div class="filter-container">
                <button id="select-all-button" class="select-all-button">
                    Tout sélectionner
                </button>
                <button class="add-button" onclick="window.location.href='ajouteleve.html'">
                    Ajouter
                </button>
                <button class="delete-button">Supprimer</button>
                <button class="filter-button">Filtrer</button>
            </div>
            <!-- <table>
                <thead>
                    <tr>
                        <th>Actions</th>
                        <th>N°étudiant</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <input type="checkbox" class="student-checkbox" />
                        </td>
                        <td>3749759237</td>
                        <td>Dupont</td>
                        <td>Jean</td>
                        <td>jean.dupont@example.com</td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" class="student-checkbox" />
                        </td>
                        <td>3749759237</td>
                        <td>Dupont</td>
                        <td>Jean</td>
                        <td>jean.dupont@example.com</td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" class="student-checkbox" />
                        </td>
                        <td>3749759237</td>
                        <td>Dupont</td>
                        <td>Jean</td>
                        <td>jean.dupont@example.com</td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" class="student-checkbox" />
                        </td>
                        <td>3749759237</td>
                        <td>Dupont</td>
                        <td>Jean</td>
                        <td>jean.dupont@example.com</td>
                    </tr>
                </tbody>
            </table> -->
            <!-- en php -->
            <?php
				include("connexion.inc.php");
				$result = $pdo->query('SELECT * FROM etudiants');
				
				echo'<table>';
				echo'<thead>';
				echo'<tr>';
				echo'<th>Actions</th>';
				echo'<th>N°étudiant</th>';
				echo'<th>Nom Prénom</th>';
				echo'<th>Email</th>';
				echo'</tr>';
				echo'</thead>';
				echo'<tbody>';
				while ($row = $result->fetch()) {
					echo'<tr>';
					echo'<td><input type="checkbox" class="student-checkbox" /></td>';
					echo'<td>' . $row['n_etud'] . '</td>';
					echo'<td>' . $row['Nom_prenom'] . '</td>';
					// echo'<td>' . $row['prenom'] . '</td>';
					echo'<td>' . $row['mail'] . '</td>';
					echo'</tr>';
				}
				echo'</tbody>';
				echo'</table>';
				
			?>
        </div>

    </main>
    <script src="script/selection.js"></script>
    <script src="script/header.js"></script>
</body>

</html>