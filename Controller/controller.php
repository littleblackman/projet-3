<?php

require('Model/model.php');

function listPosts()
{
	$posts = getAllPosts();

	require('View/accueilView.php');
}

function chapter()
{
	$chapter = getChapters($_GET['id']);
	
	require('View/chaptersView.php');
}