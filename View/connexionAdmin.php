
<?php require('template.php'); ?>
<?php require('_header.php');?>

<form method="post" action="index.php?action=login">
  <p>
    <table>
      <tr>
        <td>Identifiant :</td>
        <td><input type="text" placeholder="Votre identifiant" name="pseudo" <?php if(isset($pseudo)) { ?> value="<?=$pseudo ?>" <?php } ?>> <br /></td>
      </tr>

      <tr>
        <td>Mot de passe :</td>
        <td><input type="password" placeholder="Votre mot de passe" name="mdp" <?php if(isset($mdp)) { ?> value="<?=$mdp ?>" <?php } ?>> <br /></td>
      </tr>

      <tr>
        <td><input type="submit" name="connexion" value="Se connecter"></td>
      </tr>
    </table>
</form>

<?php require('_footer.php');?>

