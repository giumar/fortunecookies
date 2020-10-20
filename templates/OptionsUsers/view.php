<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OptionsUser $optionsUser
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Options User'), ['action' => 'edit', $optionsUser->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Options User'), ['action' => 'delete', $optionsUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $optionsUser->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Options Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Options User'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="optionsUsers view large-9 medium-8 columns content">
    <h3><?= h($optionsUser->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($optionsUser->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($optionsUser->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($optionsUser->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($optionsUser->modified) ?></td>
        </tr>
    </table>
</div>
