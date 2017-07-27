<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title"><?= $studentLastname ?> <?= $studentFirstname ?></h3>
  </div>
  <div class="panel-body">
  	<ul>
		<li>Nom : <?= $studentLastname ?></li>
		<li>Prénom : <?= $studentFirstname ?></li>
		<li>Email : <?= $studentEmail ?></li>
		<li>Date de naissance : <?= $studentBirthdate ?></li>
		<li>Age : <?= $studentAge ?></li>
		<li>Sympathie : <?= $studentFriendliness ?></li>
		<li>Ville : <?= $studentCity ?></li>
		<li>Pays : <?= $studentCountry ?></li>
  	</ul>
  	<a href="edit.php?id=<?= $studentId ?>" class="btn btn-success">Modifier</a>
  </div>
</div>