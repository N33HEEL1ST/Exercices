<?php $this->layout( 'layoutBootstrap' , ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>
<ul>
	<li><a class="btn btn-primary" href="<?= $this->url('conference_est') ?>">Conférence EST</a></li>
	<li><a class="btn btn-primary" href="<?= $this->url('conference_ouest') ?>">Conférence OUEST</a></li>
</ul>
<?php $this->stop('main_content') ?>
