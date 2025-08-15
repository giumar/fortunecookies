<!DOCTYPE html>
<html lang="en">
    <head>
        <?= $this->Html->charset() ?>

        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
        <title><?= $this->fetch('title') ?></title>
        <?= $this->Html->meta('icon') ?>

        <?= $this->Html->css('/metroui/metro.css'); ?>
        <?= $this->Html->css('/metroui/icons.css'); ?>
    </head>
    <body>

        <div class="container">
            <?php if ($this->Identity->isLoggedIn()) { ?>
                <nav data-role="app-bar" data-expand="true">
                    <?= $this->Html->link('<span class="caption">FC Home</span>', ['prefix' => false, 'controller' => 'dashboard', 'action' => 'index'], ['class' => 'brand', 'escape' => false]); ?>
                    <ul class="app-bar-menu ml-auto">
                        <li><?= $this->Html->link('Tickets', ['prefix' => false, 'controller' => 'tickets', 'action' => 'index']); ?></li>							
                        <li>
                            <a class="dropdown-caret" href="#">Utente</a>
                            <ul class="d-menu" data-role="dropdown">
                                <li><?=
                                    $this->Html->link(
                                            $this->Identity->get("email"),
                                            ['prefix' => null, 'controller' => 'Dashboard', 'action' => 'index']
                                    );
                                    ?>
                                </li>
                                <li><a class="dropdown-item" href="#">Options</a></li>
                                <li><a class="dropdown-item" href="#">My Profile</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="dropdown-caret" href="#">
                                <span class="mif-admin-panel mif-2x"></span>&nbsp;Administration
                            </a>
                            <ul class="d-menu" data-role="dropdown">
                                <li><?= $this->Html->link('Users', ['prefix' => 'Admin', 'controller' => 'Users', 'action' => 'index']); ?></li>
                                <li><?= $this->Html->link('Types', ['prefix' => 'Admin', 'controller' => 'tickettypes', 'action' => 'index']); ?></li>
                                <li><?= $this->Html->link('Statuses', ['prefix' => 'Admin', 'controller' => 'ticketstatuses', 'action' => 'index']); ?></li>
                            </ul>
                        </li>
                        <li><?= $this->Html->link('<span class="mif-exit mif-2x"></span>&nbsp;Logout', ['prefix' => 'Admin', 'controller' => 'Users', 'action' => 'logout'], ['escape' => false]); ?></li>
                    </ul>
                </nav>
                <h1><?= $this->fetch('title') ?></h1>
            <?php } ?>
            <?php if ($this->Flash) : ?>

                <?= $this->Flash->render() ?>
            <?php endif; ?>
            <?= $this->fetch('content') ?>
            <?php if ($this->Identity->isLoggedIn()) { ?>
                <footer>
                </footer>
            <?php } ?>
        </div>
        <?= $this->Html->script('/metroui/metro.js'); ?>
    </body>
</html>
