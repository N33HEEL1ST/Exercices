<?php
//hérite du fichier layout.php à la racine de app/Views/
$this->layout('layoutBootstrap', array('title' => 'Sign up'));
?>

<?php
//début du bloc main_content
$this->start('main_content');
?>

<div class="row">
    <div class="col-md-2 col-sm-2 col-xs-0"></div>
    <div class="col-md-8 col-sm-8 col-xs-12">
        <form method="post" action="">
            <fieldset>
                <input type="text" class="form-control" name="usernameToto" value="<?= $username ?>" placeholder="Username" /><br />
                <input type="email" class="form-control" name="emailToto" value="<?= $email ?>" placeholder="Email address" /><br />
                <input type="password" class="form-control" name="passwordToto1" value="" placeholder="Your password" /><br />
                <input type="password" class="form-control" name="passwordToto2" value="" placeholder="Confirm your password" /><br />
                <input type="submit" class="btn btn-success btn-block" value="Sign up" />
            </fieldset>
        </form>
    </div>
    <div class="col-md-2 col-sm-2 col-xs-0"></div>
</div>

<?php
//fin du bloc
$this->stop('main_content');
?>
