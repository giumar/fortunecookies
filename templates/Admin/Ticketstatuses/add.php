<?php
/**
 * @var \App\View\AppView $this
 */
?>
<ul class="h-menu">
    <li><?= $this->Html->link(__('List Ticketstatuses'), ['action' => 'index']) ?></li>
</ul>
<?= $this->Form->create($ticketstatus, ['templates' => 'bs4form']) ?>
<?= $this->Form->control('name'); ?>
<?= $this->Form->submit(__('Submit')) ?>
<?= $this->Form->end() ?>

