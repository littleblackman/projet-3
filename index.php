<?php
require_once('Controller/controller.php');

if (isset($_GET['action'])) {
	if ($_GET['action'] == 'listPosts') {
		listPosts();
	}
	elseif ($_GET['action'] == 'chapter') {
		if (isset($_GET['id']) && $_GET['id'] >0) {
			chapter();
		}
		else {
			echo 'Erreur : aucun identifiant de billet envoyé';
		}
	}
}
else {
	listPosts();
}