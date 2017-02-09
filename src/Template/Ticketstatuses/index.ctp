<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ticketstatus'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ticketstatuses index large-9 medium-8 columns content">
    <h3><?= __('Ticketstatuses') ?></h3>
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
            <?php foreach ($ticketstatuses as $ticketstatus): ?>
            <tr>
                <td><?= $this->Number->format($ticketstatus->id) ?></td>
                <td><?= h($ticketstatus->name) ?></td>
                <td><?= h($ticketstatus->created) ?></td>
                <td><?= h($ticketstatus->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ticketstatus->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ticketstatus->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ticketstatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticketstatus->id)]) ?>
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
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
