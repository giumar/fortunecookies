<?php

?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->fetch('title') ?></title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
	
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.45/css/bootstrap-datetimepicker.min.css" integrity="sha256-fvJKVbJ88IcaChD+XLbR7WYIsaXX7eUO3qBuQ0VlAn8=" crossorigin="anonymous" />
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment-with-locales.min.js" integrity="sha256-vvT7Ok9u6GbfnBPXnbM6FVDEO8E1kTdgHOFZOAXrktA=" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.45/js/bootstrap-datetimepicker.min.js" integrity="sha256-SS5UPPXAM4HWVoFCt0tsx90VWhRf7cStU5kabObE8cw=" crossorigin="anonymous"></script>
	
	
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style type="text/css">
		body {padding-top:40px;}
	</style>
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
	

</body>
</html>
