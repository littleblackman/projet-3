<?php

require('Model/ChapterManager.php');

class Controller
{

	public function listPosts()
	{
		$posts = new ChapterManager();
		$listPosts = $posts->getAllPosts();
		require('View/accueilView.php');
	}

	public function chapterAction()
	{
		$chapter = new ChapterManager();
		$chapterAction = $chapter->getChapters($_GET['id']);
		require('View/chaptersView.php');
	}

	public function addChapter($id, $number, $picture, $contents)
	{
		$AddChapter = new ChapterManager();
		$chapterAdding = dbAddChapter($id, $picture, $number, $contents);
		require('View/backendView.php');
	}
}