<div class="col-xs-12 col-md-5"></div>
<div class="col-xs-12 col-md-2">
	<div class="well">
		<?= $this->Flash->render('auth') ?>
		<?= $this->Form->create(null, ['templates'=>'bs4form']) ?>
			<fieldset>
				<legend><?= __('Please enter your username and password') ?></legend>
				<?= $this->Form->input('email') ?>
				<?= $this->Form->input('password') ?>
			</fieldset>
		<?= $this->Form->submit(__('Login')); ?>
		<?= $this->Form->end() ?>
	</div>
</div>
<div class="col-xs-12 col-md-5"></div>
