<?php
use Cake\Core\Configure;

$isUserLoggedIn = $this->getRequest()->getSession()->read('Auth.User.id');
$isUserLoggedIn = true;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?= $this->Html->charset() ?>
        
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
        <title><?= $this->fetch('title') ?></title>
        <?= $this->Html->meta('icon') ?>
        
        <?php
            if(Configure::read('debug')) {
                echo $this->Html->css('/bootstrap-5.3.2/css/bootstrap.css');
            } else {
                echo $this->Html->css('/bootstrap-5.3.2/css/bootstrap.min.css');
            }
        ?>
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    </head>
    <body>
        <div class="container-fluid">
            <?php if ($isUserLoggedIn) { ?>
                <div class="row">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light" role="navigation">
                        <div class="container-fluid">
                            <?= $this->Html->link('FC Home', ['prefix' => false, 'controller' => 'dashboard', 'action' => 'index'], ['class' => 'navbar-brand']); ?>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarPrincipale" aria-controls="navbarPrincipale" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse d-flex flex-row-reverse" id="navbarPrincipale">
                                <ul class="nav navbar-nav">
                                    <li class="nav-item"><?= $this->Html->link('Tickets', ['prefix' => false, 'controller' => 'tickets', 'action' => 'index'], ['class' => 'nav-link']); ?></li>							
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarUserItems" data-bs-toggle="dropdown" role="button" aria-expanded="false">Utente</a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarUserItems">
                                            <li><?=
                                                $this->Html->link(
                                                        $this->getRequest()->getSession()->read('Auth.User.email'),
                                                        ['prefix' => null, 'controller' => 'Dashboard', 'action' => 'index'],
                                                        ['class' => 'dropdown-item']
                                                );
                                                ?>
                                            </li>
                                            <li><a class="dropdown-item" href="#">Options</a></li>
                                            <li><a class="dropdown-item" href="#">My Profile</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a href="#" class="nav-link dropdown-toggle" id="navbarAdminItems" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-cogs" aria-hidden="true"></i> Administration <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarAdminItems">
                                            <li><?= $this->Html->link('Users', ['prefix' => 'Admin', 'controller' => 'Users', 'action' => 'index'], ['class' => 'dropdown-item']); ?></li>
                                            <li><?= $this->Html->link('Types', ['prefix' => 'Admin', 'controller' => 'tickettypes', 'action' => 'index'], ['class' => 'dropdown-item']); ?></li>
                                            <li><?= $this->Html->link('Statuses', ['prefix' => 'Admin', 'controller' => 'ticketstatuses', 'action' => 'index'], ['class' => 'dropdown-item']); ?></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><?= $this->Html->link('<i class="fa fa-sign-out" aria-hidden="true"></i> Logout', ['prefix' => 'Admin', 'controller' => 'Users', 'action' => 'logout'], ['class' => 'nav-link', 'escape' => false]); ?></li>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>
                </div>
                <div class="page-header">
                    <h1><?= $this->fetch('title') ?></h1>
                </div>
            <?php } ?>
            <?php if ($this->Flash) : ?>
                <div class="row">
                    <div class="col-xs-12">
                        <?= $this->Flash->render() ?>
                    </div>
                </div>
            <?php endif; ?>
            <div class="row">
                <?= $this->fetch('content') ?>
            </div>
            <?php if ($isUserLoggedIn) { ?>
                <div class="row">
                    <footer>
                    </footer>
                </div>
            <?php } ?>
        </div>

        
        <?php
            if(Configure::read('debug')) {
                echo $this->Html->script('/bootstrap-5.3.2/js/bootstrap.bundle.js');
            } else {
                echo $this->Html->script('/bootstrap-5.3.2/js/bootstrap.bundle.min.js');
            }
        ?>
    </body>
</html>
