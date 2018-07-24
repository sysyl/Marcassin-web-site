<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MARCASSIN - Messagerie</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet" >
      <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico"/>
    <link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111"/>


  </head>
  <body>
    <!-- Left column -->
    <div class="templatemo-flex-row">
      <div class="templatemo-sidebar">
        <header class="templatemo-site-header">
        <div class="square"></div>
          <h1>MARCASSIN</h1>
        </header>
        <!-- Search box -->
        <form class="templatemo-search-form" role="search">
          <div class="input-group">
              <button type="submit" class="fa fa-search"></button>
              <input type="text" class="form-control" placeholder="Rechercher" name="srch-term" id="srch-term">
          </div>
        </form>
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
        </div>
        <nav class="templatemo-left-nav">
          <ul>
            <li><a href="index.html"><i class="fa fa-home fa-fw"></i>Accueil</a></li>
            <li><a href="data-visualization.html"><i class="fa fa-bar-chart fa-fw"></i>Tableau de bord</a></li>
            <li><a href="preferences.html"><i class="fa fa-sliders fa-fw"></i>Profil</a></li>
            <li><a href="manage-users.html"><i class="fa fa-users fa-fw"></i>Espace utilisateurs</a></li>
            <li><a href="login.html"><i class="fa fa-eject fa-fw"></i>Déconnexion</a></li>
          </ul>
        </nav>
      </div>
      <!-- Main content -->
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">
                <li><a href="chat.php" class="active">Messagerie</a></li>
                <li><a href="login.html">Se connecter</a></li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="templatemo-content-container">
          <div class="templatemo-flex-row flex-content-row">
            <div class="templatemo-content-widget white-bg col-2">
              <div class="square"></div>
              <h2 class="templatemo-inline-block">MESSAGERIE</h2><hr>
              <div class="row">
                <div class="col-sm-12">
                  <form action="chat_post.php" method="post">
      <p>
      <label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo" /><br /></br>
      <label for="message">Message</label> :  <input type="text" name="message" id="message" /><br /></br>

      <input type="submit" value="Envoyer" />
</p>
  </form>

<?php
// Connexion à la base de données
try
{
$bdd = new PDO('mysql:host=localhost;dbname=marcassin;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
      die('Erreur : '.$e->getMessage());
}
?>
<h2 class="templatemo-inline-block"></h2><hr>
<?php
// Récupération des 10 derniers messages
$reponse = $bdd->query('SELECT * FROM chat ORDER BY idMessage DESC LIMIT 0, 10');

// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
while ($donnees = $reponse->fetch())
{
echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . ' : ' . '</strong> ' . '</p>';
echo '<p>Le ' . htmlspecialchars($donnees['date']) . ' : ' . '</p>';
echo '<p style="color:#C70039;">' . htmlspecialchars($donnees['message']) . '</p>';
}

$reponse->closeCursor();

//récupère le numéro de page dans l'url et tu le sécurise
$page = is_numeric($_GET['page']) ? $_GET['page'] : 1;
?>
<hr></br>
          </div>
        </div></br>
      </div>

    </div>

</div>

<footer class="text-right">
  <p>Copyright &copy; Sylvain LANGER |
    <a href="https://www.linkedin.com/in/sylvain-langer-9148b5149/" target="_parent">Linkedin</a></p>
  </footer>
</div>
</div>
</body>
</html>
