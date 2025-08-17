<?php
/**
 * @var \App\View\AppView $this
 */
?>
<ul class="h-menu">
    <li><?= $this->Html->link(__('Edit Tickettype'), ['action' => 'edit', $tickettype->id]) ?> </li>
    <li><?= $this->Form->postLink(__('Delete Tickettype'), ['action' => 'delete', $tickettype->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tickettype->id)]) ?> </li>
    <li><?= $this->Html->link(__('List Tickettypes'), ['action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Tickettype'), ['action' => 'add']) ?> </li>
</ul>

<h3><?= h($tickettype->name) ?></h3>
<ul class="items-list">
    <li><?= __('Name') ?>: <?= h($tickettype->name) ?></li>
    <li><?= __('Id') ?>: <?= $this->Number->format($tickettype->id) ?></li>
    <li><?= __('Created') ?>: <?= h($tickettype->created) ?></li>
    <li><?= __('Modified') ?>: <?= h($tickettype->modified) ?></li>
</ul>
