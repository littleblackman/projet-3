<?php

require('Model/ChapterManager.php');

class Controller
{

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

	public function addChapter($id, $number, $title, $picture, $contents)
	{
		$addChapter = new ChapterManager();
		$chapterAdding = $addChapter($id, $number, $title, $picture, $contents);
		require('View/backend/backendView.php');
	}
}
