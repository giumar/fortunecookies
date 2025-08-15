<?php
/**
 * @var \App\View\AppView $this
 */
?>
<ul class="h-menu">
    <li><?= $this->Html->link(__('Edit Ticketstatus'), ['action' => 'edit', $ticketstatus->id]) ?> </li>
    <li><?= $this->Form->postLink(__('Delete Ticketstatus'), ['action' => 'delete', $ticketstatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticketstatus->id)]) ?> </li>
    <li><?= $this->Html->link(__('List Ticketstatuses'), ['action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Ticketstatus'), ['action' => 'add']) ?> </li>
</ul>
<h3><?= h($ticketstatus->name) ?></h3>
<ul class="items-list">
    <li><?= __('Name') ?>: <?= h($ticketstatus->name) ?></li>
    <li><?= __('Id') ?>: <?= $this->Number->format($ticketstatus->id) ?></li>
    <li><?= __('Created') ?>: <?= h($ticketstatus->created) ?></li>
    <li><?= __('Modified') ?>: <?= h($ticketstatus->modified) ?></li>
</ul>
