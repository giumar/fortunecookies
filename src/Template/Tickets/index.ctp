<div class="col-xs-12">
	<div class="panel panel-default">
		<div class="panel-heading">
			<div class="row clearfix">
				<div class="col-xs-3 col-md-3">
					<h4><?= __('Tickets') ?></h4>
				</div>
				<div class="col-xs-9"><?= $this->Html->link(__('<span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> New Ticket '), ['action' => 'add'], ['escape'=>false, 'class'=>'btn btn-default']) ?></div>
			</div>
		</div>
		<table class="table table-condensed">
			<thead>
				<tr>
					<th scope="col"><?= $this->Paginator->sort('id') ?></th>
					<th scope="col"><?= $this->Paginator->sort('title') ?></th>
					<th scope="col"><?= $this->Paginator->sort('tickettype_id', 'Type of ticket') ?></th>
					<th scope="col"><?= $this->Paginator->sort('ticketstatus_id', 'Status') ?></th>
					<th scope="col"><?= $this->Paginator->sort('created') ?></th>
					<th scope="col"><?= $this->Paginator->sort('modified') ?></th>
					<th scope="col" class="actions"><?= __('Actions') ?></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($tickets as $ticket): ?>
				<tr>
					<td><?= $this->Number->format($ticket->id) ?></td>
					<td><strong><?= h($ticket->title) ?></strong></td>
					<td><?= h($ticket->tickettype['name']) ?></td>
					<td><?= h($ticket->ticketstatus['name']) ?></td>
					<td><?= h($ticket->created) ?></td>
					<td><?= h($ticket->modified) ?></td>
					<td class="actions">
						<?= $this->Html->link(__('View'), ['action' => 'view', $ticket->id]) ?>
						<?= $this->Html->link(__('Edit'), ['action' => 'edit', $ticket->id]) ?>
						<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ticket->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticket->id)]) ?>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<div class="panel-footer">
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
	</div>
</div>