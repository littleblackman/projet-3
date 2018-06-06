<?php

require_once('Model/ChapterManager.php');

class Controller
{

 public function mapage()
 {
 	require ('View/mapage.php');
 }

 public function hello()
 {
 	require ('View/hello.php');
 }

	public function listPosts()
	{
		$posts = new ChapterManager();
		$listPosts = $posts->getAllPosts();
		require('View/homeView.php');
	}

	public function chapterAction()
	{
		$chapter = new ChapterManager();
		$chapterAction = $chapter->getChapters($_GET['id']);
		require('View/chaptersView.php');
	}
	public function connexionAdmin()
	{
		require('View/connexionAdmin.php');
	}

  public function login() {
  	if(isset($_POST['pseudo']) && isset($_POST['mdp'])) {
	  	$pseudo = htmlspecialchars($_POST['pseudo']);
			$mdp 		= htmlspecialchars($_POST['mdp']);
			if($pseudo == 'test' && $mdp == 'test') {
				// instancie la session
				$_SESSION['admin'] = true;
				//$_SESSION['role']  = "admin";
			}
			header('location:index.php?action=adminView');
		}
  }

  public function logout() {
  	session_unset();
		header('location:index.php?action=homeView.php');
  }


	public function adminEnter()
	{
		// affiche les 4 dernieres entrées
		// faire une requete dans la bdd pour récupérer les 4 derniers articles
		// j'appelle la methode qui me permet de récupérer les articles voulus
		$manager = new ChapterManager();
		$lastArticles = $manager->getLastChapters();
		// permet l'ajout d'un nouvel article

		require('View/backend/adminView.php');
	}
	public function addChapters()
	{

		require('View/backend/newChapter.php');
	}
	public function get404()
	{
		require('View/404.php');
	}

}
