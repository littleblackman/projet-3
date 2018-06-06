
<?php require_once ('View/template.php');?>
<?php require_once ('View/_header.php');?>
<h5>Tableau de bord</h5>

<!-- afficher les titres des articles -->


  <table>
    <thead>
      <th>N°</th>
      <th>Titre</th>
      <th/>
    </thead>
    <tbody>
      <?php foreach ($lastArticles as $article):?>
        <tr>
          <td><?= $article->getNumber();?></td>
          <td><?= $article->getTitle();?></td>
          <td>
            <a href="index.php?action=edit">Edit</a>
          </td>
        </tr>

      <?php endforeach;?>
    </tbody>
  </table>








