<?php
/**
 * @var \App\View\AppView $this
 */
?>
<ul class="h-menu">
    <li class="heading"><?= __('Actions') ?></li>
    <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
    <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
    <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
</ul>
<div class="card">
    <div class="card-header">
        <h3>User ID: <?= h($user->id) ?> - <?= h($user->email) ?></h3>
    </div>
    <div class="card-content">
        <ul class="items-list">
            <li><?= __('Email') ?>:<?= h($user->email) ?></li>
            <li><?= __('Password') ?>: <?= h($user->password) ?></li>
            <li><?= __('Id') ?>: <?= h($user->id) ?></li>
            <li><?= __('Created') ?>: <?= h($user->created) ?></li>
            <li><?= __('Modified') ?>: <?= h($user->modified) ?></li>
        </ul>
    </div>
</div>
