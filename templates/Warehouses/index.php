<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Warehouse[]|\Cake\Collection\CollectionInterface $warehouses
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Warehouse'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="warehouses index large-9 medium-8 columns content">
    <h3><?= __('Warehouses') ?></h3>
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
            <?php foreach ($warehouses as $warehouse): ?>
            <tr>
                <td><?= $this->Number->format($warehouse->id) ?></td>
                <td><?= h($warehouse->name) ?></td>
                <td><?= h($warehouse->created) ?></td>
                <td><?= h($warehouse->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $warehouse->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $warehouse->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $warehouse->id], ['confirm' => __('Are you sure you want to delete # {0}?', $warehouse->id)]) ?>
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
