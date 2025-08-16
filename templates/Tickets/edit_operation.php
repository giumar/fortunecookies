<?= $this->Form->create($operation, ['templates' => 'bs4form']) ?>
<?= $this->Form->hidden('ticket_id', ['value' => $operation->ticket_id]); ?>
<?= $this->Form->control('start'); ?>
<?= $this->Form->control('end'); ?>
<?= $this->Form->control('description'); ?>
<?= $this->Form->submit(__('Submit')) ?>
<?= $this->Form->end() ?>
