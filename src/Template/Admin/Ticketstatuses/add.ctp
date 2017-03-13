<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Ticketstatuses'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="col-xs-12">
    <?= $this->Form->create($ticketstatus, ['templates'=>'bs4form']) ?>
    <fieldset>
        <legend><?= __('Add Ticketstatus') ?></legend>
        <?php
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?= $this->Form->submit(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
