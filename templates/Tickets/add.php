<div class="col">
<?php
	echo $this->Form->create($ticket, ['templates'=>'bs4form']);
	echo $this->Form->control('title');
	echo $this->Form->control('description');
	echo $this->Form->control('tickettype_id', ['options' => $types, 'label'=>'Type of ticket']);
	echo $this->Form->control('ticketstatus_id', ['options' => $statuses, 'label' => 'Status']);
	echo $this->Form->submit(__('Submit'));
	echo $this->Form->end();
?>
</div>
