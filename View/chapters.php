<?php require('template.php'); ?>
<?php require('_header.php');?>

<div class="contenu">
	<div class="title">
		<?php echo $chapterAction['chapter_number'];?>
	</div>
	<img class="picture" img src="<?= $chapterAction['picture'];?>" alt="Alaska" title="<?= $chapterAction['chapter_number'];?>" />
	<section>
		<div class="story">
			<p><?= $chapterAction['contents'];?></p>
		</div>
	</section>
</div>

<?php require('_footer.php');?>

