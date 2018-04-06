<nav class="navbar navbar-expand-xl navbar-light bg-light">
    <!-- Brand and toggle get grouped for better mobile display -->
    <?= $this->Html->link('FC Home', ['controller'=>'dashboard', 'action'=>'index'],['class'=>'navbar-brand']); ?>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbarMain">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <?= $this->Html->link('Tickets', ['controller'=>'tickets', 'action'=>'index'],['class'=>'nav-link']); ?>
            </li>
        </ul>
        <!--
        <form class="form-inline ml-auto">
            <div class="form-group has-white">
                <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-white btn-raised btn-fab btn-fab-mini btn-round">
                <i class="material-icons"></i>
            </button>
        </form>
        -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <?php if($this->request->session()->check('Auth.User')) {
                        echo $this->request->session()->read('Auth.User.email');
                    } else {
                        echo "User profile ";
                    }
                    ?>
                    <span class="caret"></span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a href="#" class="dropdown-item">Options</a>
                    <a href="#" class="dropdown-item">My Profile</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-cogs" aria-hidden="true"></i> Administration <span class="caret"></span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <?= $this->Html->link('Users', ['controller'=>'users', 'action'=>'index'], [ 'class' =>'dropdown-item']); ?>
                    <?= $this->Html->link('Types', ['controller'=>'tickettypes', 'action'=>'index'], [ 'class' =>'dropdown-item']); ?>
                    <?= $this->Html->link('Statuses', ['controller'=>'ticketstatuses', 'action'=>'index'], [ 'class' =>'dropdown-item']); ?>
                </div>
            </li>
            <li class="nav-item"><?= $this->Html->link('<i class="fa fa-sign-out" aria-hidden="true"></i> Logout', ['controller'=>'users', 'action'=>'logout'], [ 'class'=>'nav-link', 'escape' => false ]);?></li>
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>
