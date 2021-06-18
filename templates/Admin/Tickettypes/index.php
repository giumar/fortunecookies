<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New type of ticket'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="col-xs-12">
    <h3><?= __('Types of ticket') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table">
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
            <?php foreach ($tickettypes as $tickettype): ?>
            <tr>
                <td><?= $this->Number->format($tickettype->id) ?></td>
                <td><?= h($tickettype->name) ?></td>
                <td><?= h($tickettype->created) ?></td>
                <td><?= h($tickettype->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tickettype->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tickettype->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tickettype->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tickettype->id)]) ?>
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
