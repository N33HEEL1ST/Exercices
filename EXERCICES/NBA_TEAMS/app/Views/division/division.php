<?php
//hérite du fichier layout.php à la racine de app/Views/
$this->layout('layout', array('title' => 'Teams of Est'));
?>

<?php
//début du bloc main_content
$this->start('main_content'); ?>
<h1>Liste des divisions <?= $divisionName // Cette variable est définie dans ->show() ?></h1>

<span>  ---  </span><a href="<?= $this->url('default_home'); ?>">Accueil</a>
<span>  ---  </span><a href="<?= $this->url('conference_est') ?>">Conférence EST</a>
<span>  ---  </span><a href="<?= $this->url('conference_ouest') ?>">Conférence OUEST</a>
<span>  ---  </span>

<ul>
<?php foreach ($teamList as $currentTeamName) : ?>
    <li><?= $currentTeamName ?></li>
<?php endforeach; ?>
</ul>

<?php
//fin du bloc
$this->stop('main_content'); ?>


<?php
//hérite du fichier layout.php à la racine de app/Views/
$this->layout('layout', array('title' => 'Division'));
?>
