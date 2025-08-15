<?php
/**
 * @var \App\View\AppView $this
 */
?>
<ul class="h-menu">
    <li><?= $this->Html->link(__('Edit Ticket'), ['action' => 'edit', $ticket->id], ['class' => 'nav-link']) ?> </li>
    <li><?= $this->Form->postLink(__('Delete Ticket'), ['action' => 'delete', $ticket->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticket->id), 'class' => 'nav-link']) ?> </li>
    <li><?= $this->Html->link(__('List Tickets'), ['action' => 'index'], ['class' => 'nav-link']) ?> </li>
    <li><?= $this->Html->link(__('New Ticket'), ['action' => 'add'], ['class' => 'nav-link']) ?> </li>
    <li><?= $this->Html->link(__('List Operations'), ['controller' => 'Operations', 'action' => 'index'], ['class' => 'nav-link']) ?> </li>
    <li><?= $this->Html->link(__('New Operation'), ['controller' => 'Operations', 'action' => 'add'], ['class' => 'nav-link']) ?> </li>
</ul>
<h3><span class="label label-default">#<?= $this->Number->format($ticket->id) ?></span> <?= h($ticket->title) ?></h3>
<div>
    <div>Title: <?= h($ticket->title) ?></div>
    <div>ID: <?= $this->Number->format($ticket->id) ?></div>
    <div>Created: <?= h($ticket->created) ?></div>
    <div>Modified: <?= h($ticket->modified) ?></div>
    <div>Description: <?= h($ticket->description) ?></div>
</div>

<h4><?= __('Related Operations') ?></h4> 

<?= $this->Html->link('<i class="fa fa-plus-circle" aria-hidden="true"></i> Add Operation', ['controller' => 'tickets', 'action' => 'add_operation', $ticket->id], ['class' => 'btn btn-success', 'escape' => false]); ?>

<?php if (!empty($ticket->operations)): ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col"><?= __('Start') ?></th>
                <th scope="col"><?= __('End') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ticket->operations as $operations): ?>
                <tr>
                    <td><?= h($operations->start) ?></td>
                    <td><?= h($operations->end) ?></td>
                    <td><?= h($operations->description) ?></td>
                    <td><?= h($operations->created) ?></td>
                    <td><?= h($operations->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['controller' => 'Tickets', 'action' => 'view_operation', $operations->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['controller' => 'Tickets', 'action' => 'edit_operation', $operations->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tickets', 'action' => 'delete_operation', $operations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $operations->id)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>
