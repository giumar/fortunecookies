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
		
		<!-- THE Navbar -->
		<?= $this->element('navbar'); ?>
		<!-- THE Navbar -->
		
        <!-- main content with column -->
        <div class="row">
            <div class="col-2 bg-dark rounded-bottom p-2">
            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Active</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>

            </div>
            <div class="col-10">
                <h1><?= $this->fetch('title') ?></h1>
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
                <div class="row">
                    <footer>
                    </footer>
                </div>
            </div>
        </div>
	</div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>
