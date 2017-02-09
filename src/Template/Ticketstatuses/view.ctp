<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ticketstatus'), ['action' => 'edit', $ticketstatus->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ticketstatus'), ['action' => 'delete', $ticketstatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticketstatus->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ticketstatuses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticketstatus'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ticketstatuses view large-9 medium-8 columns content">
    <h3><?= h($ticketstatus->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($ticketstatus->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ticketstatus->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($ticketstatus->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($ticketstatus->modified) ?></td>
        </tr>
    </table>
</div>
