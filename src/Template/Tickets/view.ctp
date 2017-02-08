<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="row">
	<nav class="large-3 medium-4 columns" id="actions-sidebar">
		<ul class="nav nav-tabs">
			<li><?= $this->Html->link(__('Edit Ticket'), ['action' => 'edit', $ticket->id]) ?> </li>
			<li><?= $this->Form->postLink(__('Delete Ticket'), ['action' => 'delete', $ticket->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticket->id)]) ?> </li>
			<li><?= $this->Html->link(__('List Tickets'), ['action' => 'index']) ?> </li>
			<li><?= $this->Html->link(__('New Ticket'), ['action' => 'add']) ?> </li>
			<li><?= $this->Html->link(__('List Operations'), ['controller' => 'Operations', 'action' => 'index']) ?> </li>
			<li><?= $this->Html->link(__('New Operation'), ['controller' => 'Operations', 'action' => 'add']) ?> </li>
		</ul>
	</nav>
</div>
<div class="row">
	<div class="panel panel-default">
		<div class="panel-heading">#<?= $this->Number->format($ticket->id) ?> <?= h($ticket->title) ?></div>
		<div class="panel-body">
			<div class="col-xs-12 col-md-3">Title: <?= h($ticket->title) ?></div>
			<div class="col-xs-12 col-md-3">ID: <?= $this->Number->format($ticket->id) ?></div>
			<div class="col-xs-12 col-md-3">Created: <?= h($ticket->created) ?></div>
			<div class="col-xs-12 col-md-3">Modified: <?= h($ticket->modified) ?></div>
		</div>
	</div>
    <div class="related">
        <h4><?= __('Related Operations') ?><?= $this->Html->link('Add Operation', ['controller'=>'tickets', 'action'=>'addoperation', $ticket->id]); ?></h4>
        <?php if (!empty($ticket->operations)): ?>
        <table cellpadding="0" cellspacing="0" class="table">
            <tr>
                <th scope="col"><?= __('Start') ?></th>
                <th scope="col"><?= __('End') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($ticket->operations as $operations): ?>
            <tr>
                <td><?= h($operations->start) ?></td>
                <td><?= h($operations->end) ?></td>
                <td><?= h($operations->created) ?></td>
                <td><?= h($operations->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Operations', 'action' => 'view', $operations->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Operations', 'action' => 'edit', $operations->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Operations', 'action' => 'delete', $operations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $operations->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
