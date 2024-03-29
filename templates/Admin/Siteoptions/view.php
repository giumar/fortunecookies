<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Siteoption'), ['action' => 'edit', $siteoption->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Siteoption'), ['action' => 'delete', $siteoption->id], ['confirm' => __('Are you sure you want to delete # {0}?', $siteoption->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Siteoptions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Siteoption'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="siteoptions view large-9 medium-8 columns content">
    <h3><?= h($siteoption->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($siteoption->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Value') ?></th>
            <td><?= h($siteoption->value) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($siteoption->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($siteoption->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($siteoption->modified) ?></td>
        </tr>
    </table>
</div>
