<?php require_once ('View/template.php'); ?>
<?php require_once ('View/_headerA.php');?>

<h6>Modifier chapitre</h6>

  <form action="index.php?action=edit" method="post">
    <?php if($edit->getId());?>
        <input type="hidden" name="values[id]" value="<?= $edit->getId();?>"/>


    N° du chapitre : <input type="text" name="number" placeholder="Numéro" value="index.php?action=edit&id<?= $edit->getId();?>"  />
    Titre du chapitre : <input type="text" name="title" value="index.php?action=edit&id<?= $edit->getTitle();?>" />
    <textarea name="contents" rows="8" cols="45" value="index.php?action=edit&id<?= $edit->getContents();?>" >Contenu :</textarea>
    <input type="submit" value="Valider">
  </form>
