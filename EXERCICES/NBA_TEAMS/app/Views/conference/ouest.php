<?php
//hérite du fichier layout.php à la racine de app/Views/
$this->layout('layout', array('title' => 'Conférence Est'));
?>

<?php
//début du bloc main_content
$this->start('main_content'); ?>
<h1>Liste des divisions</h1>

<span>  ---  </span><a href="<?= $this->url('default_home'); ?>">Accueil</a>
<span>  ---  </span><a href="<?= $this->url('conference_est'); ?>">Conference Est</a>
<span>  ---  </span>

<ul>
    <?php foreach ($divisionTotoList as $currentDivision) : ?>
        <li><a href="<?= $this->url('division_division', ['conference'=> 'est', 'id'=>$currentDivision['div_id']]); ?>"><?= $currentDivision['div_name'] ?></a></li>
    <?php endforeach; ?>
</ul>

<?php
//fin du bloc
$this->stop('main_content'); ?>
