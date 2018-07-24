<html>
	<meta charset="utf-8"/>
    <link rel="icon" type="image/gif" href="img/animated_favicon1.gif">
	<link rel="stylesheet" media="screen" type="text/css" href="CSS/style.css"/>
<?php

try  /* tester la présence d'erreurs */
	{

			$bdd = new PDO('mysql:host=localhost;dbname=marcassin', 'root', 'root'); /* permet de faire le lien avec la bdd */

	}

catch (Exception $e)

	{

		die('Erreur : ' . $e->getMessage()); /* tester la présence d'erreurs (suite) */


	}
					$prenomUser = $_POST['Prénom'];
					$nomUser = $_POST['Nom'];
					$ageUser = $_POST['Age'];
					$emailUser = $_POST['Email'];
					$linkedin = $_POST['Lien Linkedin'];
					$mdpUser = $_POST['Mot de passe'];

if (empty($prenomUser) || empty($nomUser) || empty($ageUser) || empty($emailUser) || empty($emailUser) || empty($linkedin)) || empty($mdpUser))
	{
		echo "Veuillez saisir correctement vos informations!";
	}

else
	{

// insertion bdd
	$req = $bdd->prepare('INSERT INTO users(name,lastname,age,tel,email,mdp,talk) VALUES(:name,:lastname,:age,:tel,:email,:mdp,:talk)');
	$req->execute(array(
						'Prénom' => $prenomUser,
						'Nom' => $nomUser,
						'Age' => $ageUser,
						'Email' =>$emailUser,
						'Lien Linkedin' => $linkedin,
						'Mot de passe' => $mdpUser,
	}

?>
	<body>
		<div class="modal-body">
			<form action="index.html" novalidate autocomplete="off" class="idealforms reg">
				<div>
					Votre inscription à bien été enregistré ! Bienvenue !
				</div>
				<div class="field buttons">
					<button type="submit" class="submit btn green-color" value="valider">Retourner à l'acceuil</button>
				</div>
				<div class="clearfix"></div>
			</form><!-- end .reg -->
		</div><!-- end .modal-body -->
	</body>
</html>
