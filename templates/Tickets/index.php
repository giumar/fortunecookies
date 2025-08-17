
<div class="_panel _panel-default">
    <div class="_panel-heading">
        <div class="_row _clearfix">
            <div class="_col-xs-3 _col-md-3">
                <h4><?= __('Tickets') ?></h4>
            </div>
            <div class="_col-xs-9"><?= $this->Html->link(__('<i class="fa fa-plus-circle" aria-hidden="true"></i> New Ticket '), ['action' => 'add'], ['escape' => false, 'class' => 'btn btn-primary']) ?></div>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('title') ?></th>
                <th><?= $this->Paginator->sort('tickettype_id', 'Type of ticket') ?></th>
                <th><?= $this->Paginator->sort('ticketstatus_id', 'Status') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tickets as $ticket): ?>
                <tr>
                    <td><?= $this->Number->format($ticket->id) ?></td>
                    <td><?= $this->Html->link(h(h($ticket->title)), ['action' => 'view', $ticket->id]) ?></td>
                    <td><?= h($ticket->tickettype['name']) ?></td>
                    <td><?= h($ticket->ticketstatus['name']) ?></td>
                    <td><?= h($ticket->created) ?></td>
                    <td><?= h($ticket->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ticket->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ticket->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticket->id)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <ul class="pagination">
        <?= $this->Paginator->first('<< ' . __('first')) ?>
        <?= $this->Paginator->prev('< ' . __('previous')) ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next(__('next') . ' >') ?>
        <?= $this->Paginator->last(__('last') . ' >>') ?>
    </ul>
    <p><?= $this->Paginator->counter('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total') ?></p>
</div>
