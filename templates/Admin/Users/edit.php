<?php
/**
 * @var \App\View\AppView $this
 */
?>

<ul class="h-menu">
    <li><?=
        $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]
        )
        ?></li>
    <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
</ul>
<?= $this->Form->create($user, ['templates' => 'bs4form']) ?>
<?= $this->Form->control('email'); ?>
<?= $this->Form->control('password'); ?>
<?= $this->Form->submit(__('Submit')) ?>
<?= $this->Form->end() ?>
