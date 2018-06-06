<?php require_once ('View/template.php'); ?>


<h6>Ajout nouveau chapitre</h6>

  <form action="adminView.php" method="post">
    <p>N° du chapitre : <input type="text" name="number" /></p>
    <p>Titre du chapitre : <input type="text" name="title" /></p>
    <textarea name="contents" rows="8" cols="45">Contenu :</textarea>
    <p><input type="submit" value="Valider"></p>
  </form>

<h6>Liste des chapitres existants</h6>

  <table>
    <thead>
      <th>N°</th>
      <th>Titre</th>
      <th>Action</th>
    </thead>
    <tbody>
      <td><?php echo $addChapter->getNumber();?></td>
    </tbody>
  </table>
