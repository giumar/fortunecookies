<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="col-xs-12">
    <h3><?= h($operation->id) ?></h3>
    <table class="table table-vertical">
        <tr>
            <th scope="row"><?= __('Ticket') ?></th>
            <td><?= $operation->has('ticket') ? $this->Html->link($operation->ticket->title, ['controller' => 'Tickets', 'action' => 'view', $operation->ticket->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($operation->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Start') ?></th>
            <td><?= h($operation->start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('End') ?></th>
            <td><?= h($operation->end) ?></td>
        </tr>        
		<tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($operation->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($operation->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($operation->modified) ?></td>
        </tr>
    </table>
</div>
