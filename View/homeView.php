<?php require_once('template.php');?>
<?php require_once('_header.php');?>

<div>
	<section>
		<?php foreach ($listPosts as $post):?>
			<div class="bloc-resume">
				<img class="polaroid" img src="<?= $post->getPicture();?>" alt="Alaska" title="<?= $post->getTitle();?>" />
				<div class="chapitre">
					<a href="index.php?action=chapter&id=<?= $post->getId();?>" class="button"><h3><?= $post->getTitle();?></h3></a>
				</div>
				<div class="resume">
					<article><?= $post->getContents();?></article>
				</div>
			</div>
		<?php endforeach;?>
	</section>
</div>

<?php require('_footer.php');?>
