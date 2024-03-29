<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OptionsUser[]|\Cake\Collection\CollectionInterface $optionsUsers
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Options User'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="optionsUsers index large-9 medium-8 columns content">
    <h3><?= __('Options Users') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($optionsUsers as $optionsUser): ?>
            <tr>
                <td><?= $this->Number->format($optionsUser->id) ?></td>
                <td><?= h($optionsUser->name) ?></td>
                <td><?= h($optionsUser->created) ?></td>
                <td><?= h($optionsUser->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $optionsUser->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $optionsUser->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $optionsUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $optionsUser->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total') ?></p>
    </div>
</div>
