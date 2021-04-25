<?php
$nom = null;
$user = [
    'prenom' => 'John',
    'nom' => 'Doe',
    'age' => 11
];
setcookie('utilisateur', serialize($user));
//var_dump(serialize($user));
//var_dump(unserialize('a:3:{s:6:"prenom";s:4:"John";s:3:"nom";s:3:"Doe";s:3:"age";i:11;}'));
//die();

require 'elements/header.php';
?>


<?php if($nom): ?>
    <h1>Bonjour <?=htmlentities($nom) ?> </h1>
    <a href="profil.php?action=deconnecter">Se déconnecter</a>
<?php else : ?>
    <form action="" method="post">
        <div class="form-group">
            <input type="text" class="form-control" name="nom" placeholder="Entrer votre nom">
        </div>
        <button class="btn btn-primary">Se connecter</button>
    </form>
<?php endif; ?>



<?php
require 'elements/footer.php';
?>

// 13 mn