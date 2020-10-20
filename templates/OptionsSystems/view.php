<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OptionsSystem $optionsSystem
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Options System'), ['action' => 'edit', $optionsSystem->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Options System'), ['action' => 'delete', $optionsSystem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $optionsSystem->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Options Systems'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Options System'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="optionsSystems view large-9 medium-8 columns content">
    <h3><?= h($optionsSystem->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($optionsSystem->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($optionsSystem->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($optionsSystem->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($optionsSystem->modified) ?></td>
        </tr>
    </table>
</div>
