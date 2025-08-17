<div class="d-flex flex-column flex-align-items-center">
    <div class="mt-10">
        <?= $this->Flash->render('auth') ?>
        <?= $this->Form->create(null, ['templates' => 'bs4form']) ?>
        <legend><?= (__('Please enter your email and password')) ?></legend>
        <?= $this->Form->control('email') ?>
        <?= $this->Form->control('password') ?>
        <?= $this->Form->submit(__('Login')); ?>
        <?= $this->Form->end() ?>
    </div>
</div>
