<?php

require_once('Model/ChapterManager.php');

class Controller
{

	public function listPosts()
	{
		$manager = new ChapterManager();
		$listPosts = $manager->getAllPosts();
		require('View/home.php');
	}

	public function chapterAction()
	{
		$manager = new ChapterManager();
		$chapterAction = $manager->getChapters($_GET['id']);
		require('View/chapters.php');
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
			header('location:index.php?action=admin');
		}
  }

  public function logout() {
  	session_unset();
		header('location:index.php?action=listPosts');
  }

	public function adminEnter()
	{
		// affiche les 4 dernieres entrées
		// faire une requete dans la bdd pour récupérer les 4 derniers articles
		// j'appelle la methode qui me permet de récupérer les articles voulus
		$manager = new ChapterManager();
		$lastArticles = $manager->getLastChapters();
		// permet l'ajout d'un nouvel article

		require('View/backend/admin.php');
	}
	public function newChapter()
	{
		require('View/backend/newChapter.php');
	}
	public function addChapters()
	{
		$title = $_POST['title'];
		$chapter_number = $_POST['chapter_number'];
		$contents = $_POST['contents'];

		$manager = new ChapterManager();
		$manager->addChapter($title, $chapter_number, $contents);

		require('View/backend/newChapter.php');
	}
	public function allChapters()
	{
		$manager = new ChapterManager();
		$manager->getAllPosts();
	}
	public function edit($chapter_id)
	{
				$manager = new ChapterManager();
				$edit = $manager->editChapter($chapter_id);

		require('View/backend/edit.php');
	}
	public function getContact()
	{
		require('View/contact.php');
	}
	public function get404()
	{
		require('View/404.php');
	}

}
