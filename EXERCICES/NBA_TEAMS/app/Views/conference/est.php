<?php
//hérite du fichier layout.php à la racine de app/Views/
$this->layout('layout', array('title' => 'Conférence Est / East'));
?>

<?php
//début du bloc main_content
$this->start('main_content'); ?>
<h1>Liste des divisions</h1>

TODO afficher les divisions
<a href="<?= $this->url("default_home"); ?>">Acceuil</a>
<?php
//fin du bloc
$this->stop('main_content'); ?>
