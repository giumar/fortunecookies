<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tickettype'), ['action' => 'edit', $tickettype->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tickettype'), ['action' => 'delete', $tickettype->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tickettype->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tickettypes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tickettype'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tickettypes view large-9 medium-8 columns content">
    <h3><?= h($tickettype->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($tickettype->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tickettype->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($tickettype->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($tickettype->modified) ?></td>
        </tr>
    </table>
</div>
