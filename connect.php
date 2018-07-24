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
	$emailUser = $_GET['Email'];
	$mdpUser = $_GET['Mot de passe'];

if (empty($emailUser) || empty($mdpUser))
	{
		echo "Veuillez saisir correctement vos informations!";
	}

else
	{
	// vérification des logs
			$req = $bdd->prepare('SELECT * FROM user WHERE Email = :emailUser AND mdp = :mdpUser');
			$req->execute(array(
								'Email'=> $emailUser,
								'password'=> $mdpUser));

			$resultat = $req->fetch();
	if (!$resultat)
					{
						echo 'Mauvais identifiant ou mot de passe !';

					}

	else
					{
						session_start();
						$_SESSION['idUser'] = $resultat['idUser'];
						$_SESSION['prenomUser'] = $resultat['prenomUser'];
						$_SESSION['nomUser'] = $resultat['nomUser'];
						$_SESSION['emailUser'] = $resultat['emailUser'];
						$_SESSION['email'] = $resultat['email'];
						$_SESSION['linkedin'] = $resultat['linkedin'];
						$_SESSION['mdpUser'] = $resultat['mdpUser'];
					}
	}

	header('Location: indexco.php');
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>MARCASSIN - Connexion</title>
        <meta name="description" content="">
        <meta name="author" content="templatemo">

	    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
	    <link href="css/font-awesome.min.css" rel="stylesheet">
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <link href="css/templatemo-style.css" rel="stylesheet">
	      <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico"/>
    <link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111"/>

	</head>
	<body class="light-gray-bg">
		<div class="templatemo-content-widget templatemo-login-widget white-bg">
			<header class="text-center">
	          <div class="square"></div>
	          <h1>MARCASSIN</h1>
	        </header>
	        <form action="indexco.php" class="templatemo-login-form">
	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>
		              	<input type="text" class="form-control" placeholder="Email">
		          	</div>
	        	</div>
	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-key fa-fw"></i></div>
		              	<input type="password" class="form-control" placeholder="******">
		          	</div>
	        	</div>
	          	<div class="form-group">
				    <div class="checkbox squaredTwo">
				        <input type="checkbox" id="c1" name="cc" />
						<label for="c1"><span></span>Se souvenir de moi</label>
				    </div>
				</div>
				<div class="form-group">
					<button type="submit" class="templatemo-blue-button width-100">Se connecter</button>
				</div>
	        </form>
		</div>
	</body>
</html>
