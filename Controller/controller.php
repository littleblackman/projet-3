<?php

require('Model/ChapterManager.php');

class Controller
{
	
	public function listPosts()
	{
		$manager = new ChapterManager();
		$posts = $manager->getAllPosts();

		require('View/accueilView.php');
	}

	public function chapter()
	{
		$manager = new ChapterManager();
		$chapter = $manager->getChapters($_GET['id']);

		require('View/chaptersView.php');
	}
}
