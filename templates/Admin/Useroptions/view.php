<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Useroption'), ['action' => 'edit', $useroption->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Useroption'), ['action' => 'delete', $useroption->id], ['confirm' => __('Are you sure you want to delete # {0}?', $useroption->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Useroptions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Useroption'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="useroptions view large-9 medium-8 columns content">
    <h3><?= h($useroption->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $useroption->has('user') ? $this->Html->link($useroption->user->id, ['controller' => 'Users', 'action' => 'view', $useroption->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($useroption->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Value') ?></th>
            <td><?= h($useroption->value) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($useroption->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($useroption->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($useroption->modified) ?></td>
        </tr>
    </table>
</div>
