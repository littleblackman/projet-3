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
			else {
				throw new Exception('Aucun identifiant de billet envoyé');
			}
		}
		elseif ($_GET['action'] == 'adminView') {
			if ($_GET['action'] == 'adminView') {
				require ('View/backend/adminView.php');
			}
		}
		elseif ($_POST['action'] == 'newChapter') {
			if ($_POST['action'] =='newChapter') {
				require ('View/backend/newChapter.php');
			}
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

