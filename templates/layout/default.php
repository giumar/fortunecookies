<?php
$isUserLoggedIn = $this->getRequest()->getSession()->read('Auth.User.id');
?>
<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset() ?>
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
        <title><?= $this->fetch('title') ?></title>
        <?= $this->Html->meta('icon') ?>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    </head>
    <body>
        <div class="container-fluid">
            <?php if ($isUserLoggedIn) { ?>
                <div class="row">
                    <nav class="navbar navbar-default navbar-fixed-top">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <?= $this->Html->link('FC Home', ['prefix' => false, 'controller' => 'dashboard', 'action' => 'index'], ['class' => 'navbar-brand']); ?>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li><?= $this->Html->link('Tickets', ['prefix' => false, 'controller' => 'tickets', 'action' => 'index']); ?></li>							
                                </ul>
                                <form class="navbar-form navbar-left">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                    </div>
                                    <button type="submit" class="btn btn-default">Submit</button>
                                </form>
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                            <?php
                                            if ($isUserLoggedIn) {
                                                echo $this->getRequest()->getSession()->read('Auth.User.email');
                                            } else {
                                                echo "User profile ";
                                            }
                                            ?>
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Options</a></li>
                                            <li><a href="#">My Profile</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cogs" aria-hidden="true"></i> Administration <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><?= $this->Html->link('Users', ['prefix' => 'Admin', 'controller' => 'Users', 'action' => 'index']); ?></li>
                                            <li><?= $this->Html->link('Types', ['prefix' => 'Admin', 'controller' => 'tickettypes', 'action' => 'index']); ?></li>
                                            <li><?= $this->Html->link('Statuses', ['prefix' => 'Admin', 'controller' => 'ticketstatuses', 'action' => 'index']); ?></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    </li>
                                    <li><?= $this->Html->link('<i class="fa fa-sign-out" aria-hidden="true"></i> Logout', ['prefix' => 'Admin', 'controller' => 'Users', 'action' => 'logout'], ['class' => '', 'escape' => false]); ?></li>
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

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


    </body>
</html>
