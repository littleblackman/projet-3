<?php
require_once('Controller/controller.php');

if (isset($_GET['action'])) {
	if ($_GET['action'] == 'listPosts') {
		$controller = new Controller();
		$controller->listPosts()
		//listPosts();
	}
	elseif ($_GET['action'] == 'chapter') {
		if (isset($_GET['id']) && $_GET['id'] >0) {
			$controller = new Controller();
			$controller->chapter();
			//chapter();
		}
		else {
			echo 'Erreur : aucun identifiant de billet envoyé';
		}
	}
}
else {
	listPosts();
}
