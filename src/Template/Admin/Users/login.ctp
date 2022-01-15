<div class="col-xs-12 col-md-5"></div>
<div class="col-xs-12 col-md-2">
    <div class="well">
        <?= $this->Flash->render('auth') ?>
        <?= $this->Form->create(null, ['templates' => 'bs4form']) ?>
        <fieldset>
            <legend><?= __('Please enter your email and password') ?></legend>
            <?= $this->Form->control('email') ?>
            <?= $this->Form->control('password') ?>
        </fieldset>
        <?= $this->Form->button(__('Login')); ?>
        <?= $this->Form->end() ?>
    </div>
</div>
<div class="col-xs-12 col-md-5"></div>
