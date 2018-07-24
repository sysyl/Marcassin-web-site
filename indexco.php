<!DOCTYPE html>
<!--[if IE 7]>                  <html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>MARCASSIN - Accueil</title>
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

    <body>
                  <?php
									session_start();
									echo "Bonjour " . $_SESSION['prenomUser']. " " . $_SESSION['nomUser'];
								?>
								/
								<a href="deco.php">
                                    Deconnexion
                                </a>
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
                                        <li><a href="#" class="active"><i class="fa fa-home fa-fw"></i>Accueil</a></li>
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
                                            <li><a href="chat.php">Messagerie</a></li>
                                            <li><a href="login.html">Se connecter</a></li>
                                          </ul>
                                        </nav>
                                      </div>
                                    </div>
                                    <div class="templatemo-content-container">
                                      <div class="templatemo-flex-row flex-content-row">
                                        <div class="templatemo-content-widget white-bg col-2">
                                          <div class="square"></div>
                                          <h2 class="templatemo-inline-block">MARCASSIN</h2><hr>
                                          <p>Bienvenue. Marcassin est un site Web qui permet d'organiser des formations entre des apprennants et des formateurs. Vous pouvez consulter votre profil, vos dernières compétences et utiliser le système de messagerie en temps réel. Veuillez vous connecter pour pouvoir profiter de toutes les fonctionnalitées.</p>
                                          <p>Chers utilisateurs, si vous n'avez pas encore d'identifiant de connexion, veuillez en faire la demande auprès d'un administrateur.
                                          <a href="mailto:sylvain.langer@epsi.fr">Cliquer ici pour effectuer une demande.</a></p>
                                        </div>
                                      </div>
                                      <div class="templatemo-flex-row flex-content-row">
                                        <div class="col-1">
                                          <div class="templatemo-content-widget white-bg">
                                            <div class="media">
                                              <div class="media-left">
                                                <a href="faq.html">
                                                  <img class="media-object img-circle" src="images/interrogation.png" alt="informations">
                                                </a>
                                              </div>
                                              <div class="media-body">
                                                <h2 class="media-heading text-uppercase">FAQ</h2>
                                                <p></p>
                                                <p>Une question auquelle vous ne trouvez pas de réponses ?</p>
                                                <p><a href="faq.html">Cliquez ici</a> pour accéder à la foire aux questions.</p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="templatemo-content-widget white-bg">
                                            <div class="media">
                                              <div class="media-left">
                                                <a href="contact.html">
                                                  <img class="media-object img-circle" src="images/envelope.png" alt="Sunset">
                                                </a>
                                              </div>
                                              <div class="media-body">
                                                <h2 class="media-heading text-uppercase">Contact</h2>
                                                 <p><a href="contact.html">Cliquez ici</a> pour accéder à la rubrique contact.</p>
                                              </div>
                                            </div>
                                          </div>
                                        </div>

                                      </div> <!-- Second row ends -->
                                           <div class="templatemo-flex-row flex-content-row">
                                        <div class="templatemo-content-widget white-bg col-2">
                                          <h2 class="templatemo-inline-block">ESPACE FORMATION</h2><hr>
                                          <div class="row form-group">
                                            <div class="col-lg-6 col-md-6 form-group">
                                              <label class="control-label templatemo-block">Sélectionner puis valider pour s'inscrire.</label>
                                              <select class="form-control">
                                                <option value="PHP Avancé 12H00">PHP Avancé</option>
                                                <option value="CSS Fondamentaux 14H30">CSS Fondamentaux</option>
                                                <option value="HTML Avancé">HTML Avancé</option>
                                                <option value="Introduction Java">Introduction Java</option>
                                                <option value="Java Avancé">Java Avancé</option>
                                                <option value="PHP Intermédiaire">PHP Intermédiaire</option>
                                                <option value="Framework Symfony">PHP Intermédiaire</option>
                                                <option value="Introduction BDD">Introduction BDD</option>
                                                <option value="Créer un dépot Git">Créer un dépot Git</option>
                                              </select>
                                            </div>
                                            <div class="col-lg-6 col-md-6 form-group">
                                                <div class="templatemo-block margin-bottom-5">
                                                  <input type="checkbox" name="emailOptions" id="c1" value="new" checked>
                                                  <label for="c1" class="font-weight-400"><span></span>Inscription à tout les modules</label>
                                                </div>
                                                <div class="templatemo-block margin-bottom-5">
                                                  <input type="checkbox" name="emailOptions" id="c2" value="weekly">
                                                  <label for="c2" class="font-weight-400"><span></span>M'envoyer un email de confirmation</label>
                                                </div>
                                            </div>
                                            <div class="form-group text-right">
                                            <button type="submit" class="templatemo-blue-button">Enregistrer</button>
                                            <button type="reset" class="templatemo-white-button">Annuler</button>
                                          </div>
                                          </div>
                                        </div>
                                      </div>
                                      <footer class="text-right">
                                        <p>Copyright &copy; Sylvain LANGER |
                                      <a href="https://www.linkedin.com/in/sylvain-langer-9148b5149/" target="_parent">Linkedin</a></p>
                                      </footer>
                                    </div>
                                  </div>
                                </div>




    </body>
</html>
