<!DOCTYPE html>
<html lang="fr">
    <head>
        <title><?= $this->e($title) ?></title>

        <meta charset="utf-8">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
              integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
              integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="nav navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= $this->url('default_home') ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $this->url('conference_est') ?>">Conference Est</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $this->url('conference_ouest') ?>">Conference Ouest</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $this->url('users_signin') ?>">Sign in</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <div class="page-header">
                <h1><?= $this->e($title) ?></h1>
            </div>

            <!-- Gestion générique des messages d'erreur -->
            <?php if (!empty($w_flash_message)) : ?>
            <div class="alert alert-<?= $w_flash_message->level ?>"><?= $w_flash_message->message ?></div>
            <?php endif; ?>

            <section>
                <?= $this->section('main_content') ?>
            </section>

            <div id="secondContent">
                <?= $this->section('second_content') ?>
            </div>

            <br><br>
            <footer>
                <div class="well text-center">
                    &COPY; Ben - Tous droits réservés
                </div>
            </footer>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
                integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/front.js"></script>
    </body>
</html>
