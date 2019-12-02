<?php

?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <title><?= $this->fetch('title') ?></title>
    <?= $this->Html->meta('icon') ?>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/4.0.0/cyborg/bootstrap.min.css" rel="stylesheet" integrity="sha384-HOjmaybB3GQTM8HunY46MvK7ngm9b/eRGOWESCQ/s+Vk4omobTY5+FXqurpSFcbz" crossorigin="anonymous">
    -->
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/4.0.0/darkly/bootstrap.min.css" rel="stylesheet" integrity="sha384-p8bH4RlA/kdF4wbAoep+/6VeOQI2IAWa9zLjTIQbQLv2FuCjX/W/FkdYdeKISDvK" crossorigin="anonymous">


    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/4.0.0/darkly/bootstrap.min.css" rel="stylesheet" integrity="sha384-p8bH4RlA/kdF4wbAoep+/6VeOQI2IAWa9zLjTIQbQLv2FuCjX/W/FkdYdeKISDvK" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
	<div class="container-fluid">
		<?php if($this->request->session()->check('Auth.User')) { ?>
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
						<?= $this->Html->link('FC Home', ['prefix'=>false, 'controller'=>'dashboard', 'action'=>'index'],['class'=>'navbar-brand']); ?>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li><?= $this->Html->link('Tickets', ['prefix'=>false, 'controller'=>'tickets', 'action'=>'index']); ?></li>							
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
									<?php if($this->request->session()->check('Auth.User')) {
										echo $this->request->session()->read('Auth.User.email');
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
									<li><?= $this->Html->link('Users', ['prefix'=>'admin', 'controller'=>'users', 'action'=>'index']); ?></li>
									<li><?= $this->Html->link('Types', ['prefix'=>'admin', 'controller'=>'tickettypes', 'action'=>'index']); ?></li>
									<li><?= $this->Html->link('Statuses', ['prefix'=>'admin', 'controller'=>'ticketstatuses', 'action'=>'index']); ?></li>
									<li role="separator" class="divider"></li>
									<li><a href="#">Separated link</a></li>
								</ul>
							</li>
							<li><?= $this->Html->link('<i class="fa fa-sign-out" aria-hidden="true"></i> Logout', ['prefix'=>'admin', 'controller'=>'users', 'action'=>'logout'], ['class'=>'','escape'=>false]);?></li>
						</ul>						
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
		</div>
		<div class="page-header">
			<h1><?= $this->fetch('title') ?></h1>
		</div>
		<?php } ?>
		<?php if($this->Flash) : ?>
		<div class="row">
			<div class="col-xs-12">
				<?= $this->Flash->render() ?>
			</div>
		</div>
		<?php endif; ?>
		<div class="row">
			<?= $this->fetch('content') ?>
		</div>
		<?php if($this->request->session()->check('Auth.User')) { ?>
		<div class="row">
			<footer>
			</footer>
		</div>
		<?php } ?>
	</div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>
