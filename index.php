<?php
require_once('Controller/controller.php');

try {
	if (isset($_GET['action'])) {
		if ($_GET['action'] == 'listPosts') {
			$controller = new Controller();
			$listPosts = $controller->listPosts();
		}
		elseif ($_GET['action'] == 'chapter') {
			if (isset($_GET['id']) && $_GET['id'] >0) {
			 	$controller = new Controller();
			 	$chapterAction = $controller->chapterAction();
			}
		}
			else {
				throw new Exception('Aucun identifiant de billet envoyé');
			}
		}
		elseif ($_GET['action'] == 'addChapter') {
			if (isset($_GET['action'] == 'addChapter') && $_GET['id'] > 0) {
				$controller = new Controller();
				$chapterAdding = $controller->addChapter();
			}
		}
			else {
					echo 'Erreur : tous les champs ne sont pas remplis !';
				}
		}
		else {
			$controller = new Controller();
			$listPosts = $controller->listPosts();
		}
}
catch(Exception $e) {
	echo 'Erreur : '. $e->getMessage();
}