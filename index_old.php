<?
session_start();
ini_set('display_errors','on');
error_reporting(E_ALL);

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
        echo 'Erreur : aucun identifiant de billet envoyé';
      }
    }
    elseif ($_GET['action'] == 'connexion') {
      $erreur = '';
      if(isset($_POST['connexion'])){
        if (isset($_POST['pseudo']) && $_POST['mdp']) {
            $pseudo = htmlspecialchars($_POST['pseudo']);
            $mdp = htmlspecialchars($_POST['mdp']);

            if(!empty($pseudo) && !empty($mdp)) {
              if($pseudo == 'test' && $mdp == 'test'){
                $_SESSION['admin'] = true;
          $controller = new Controller();
          $controller->connexionAdmin();
          }
          else {
          $error = 'Les identifiants que vous avez saisi sont invalides';
          }
        }
        else {
          $error = 'Veuillez saisir votre identifiant et votre mot de passe';
        }
      }
    }
  }
    elseif ($_GET['action'] == 'adminView') {
        $controller = new Controller();
        $controller->adminEnter();
    }

    elseif ($_GET['action'] == 'newChapter') {
        $controller = new Controller();
        $addChapters = $controller->addChapters();
        require ('View/backend/newChapter.php');
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

