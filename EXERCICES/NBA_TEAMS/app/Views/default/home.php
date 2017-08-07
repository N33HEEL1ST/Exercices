<?php $this->layout('layoutBootstrap', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>

<?php debug($_SESSION) ?>

<!-- $this->url() permet de générer l'URL de la route passé en paramètre -->
<a href="<?= $this->url('conference_est') ?>">Conférence Est</a><br>
<a href="<?= $this->url('conference_ouest') ?>">Conférence Ouest</a><br>
<a href="<?= $this->url('users_signin') ?>">Sign In</a><br>
<a href="<?= $this->url('users_signup') ?>">Sign up</a><br>
<?php $this->stop('main_content') ?>

<?php $this->start('second_content') ?>
Second contenu ^^
<?php $this->stop('second_content') ?>
