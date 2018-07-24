<?php

// Pas de vérification de droits d'accès nécessaire : tout le monde peut voir un profil utilisateur :)

// Si le paramètre id est manquant ou invalide
if (empty($_GET['id']) or !is_numeric($_GET['id'])) {

	include CHEMIN_VUE.'erreur_parametre_profil.php';

} else {

	// On veut utiliser le modèle des membres (~/modules/membres.php)
	include CHEMIN_MODELE.'membres.php';

	// lire_infos_utilisateur() est défini dans ~/modules/membres.php
	$infos_utilisateur = lire_infos_utilisateur($_GET['id']);

	// Si le profil existe et que le compte est validé
	if (false !== $infos_utilisateur && $infos_utilisateur['hash_validation'] == '') {

		list($nom_utilisateur, ,$avatar, $adresse_email, $date_inscription, ) = $infos_utilisateur;
		include CHEMIN_VUE.'profil_infos_utilisateur.php';

	} else {

		include CHEMIN_VUE.'erreur_profil_inexistant.php';
	}
}
<h2>Profil de <?php echo htmlspecialchars($nom_utilisateur); ?></h2>

<p>
	<img class="flottant_droite" src="<?php echo DOSSIER_AVATAR.urlencode($avatar); ?>" title="Avatar de <?php echo htmlspecialchars($nom_utilisateur); ?>" />
	<span class="label_profil">Adresse email</span> : <?php echo htmlspecialchars($adresse_email); ?><br />
	<span class="label_profil">Date d'inscription</span> : <?php echo $date_inscription; ?>
</p>
